<?php
/**
 * Admin Panel - Feedback Manager for Vee'n Dee Corner
 */
require_once __DIR__ . '/config/database.php';

$db = getDb();
$message = '';

// Handle actions (delete or toggle status)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $db) {
    $action = $_POST['action'] ?? '';
    $id = intval($_POST['id'] ?? 0);

    if ($action === 'delete' && $id > 0) {
        $stmt = $db->prepare("DELETE FROM feedbacks WHERE id = :id");
        $stmt->execute([':id' => $id]);
        $message = "Saran #$id berhasil dihapus.";
    } elseif ($action === 'toggle_status' && $id > 0) {
        $stmt = $db->prepare("UPDATE feedbacks SET status = CASE WHEN status = 'read' THEN 'unread' ELSE 'read' END WHERE id = :id");
        $stmt->execute([':id' => $id]);
        $message = "Status saran #$id berhasil diperbarui.";
    }
}

// Fetch all feedbacks
$feedbacks = [];
if ($db) {
    try {
        $stmt = $db->query("SELECT * FROM feedbacks ORDER BY id DESC");
        $feedbacks = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        $feedbacks = [];
    }
} else {
    // Read from fallback JSON if DB not connected
    $json_file = __DIR__ . '/database/feedbacks.json';
    if (file_exists($json_file)) {
        $feedbacks = json_decode(file_get_contents($json_file), true) ?: [];
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard — Saran & Umpan Balik | Vee'n Dee Corner</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-stone-100 text-stone-900 font-sans min-h-screen">

  <!-- Top Navbar -->
  <header class="bg-[#18191A] text-white border-b border-stone-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex items-center justify-between">
      <div class="flex items-center gap-3">
        <div class="w-8 h-8 rounded-full bg-white p-1 flex items-center justify-center">
          <img src="assets/img/logo-circular.png" alt="VND" class="w-full h-full object-contain">
        </div>
        <div>
          <span class="font-serif text-lg font-medium">Vee'n Dee Corner</span>
          <span class="text-[10px] tracking-widest text-stone-400 block -mt-1 uppercase">Admin Panel · Kotak Saran</span>
        </div>
      </div>
      <div class="flex items-center gap-4">
        <a href="index.php" class="text-xs uppercase tracking-widest text-stone-300 hover:text-white flex items-center gap-1.5 transition-colors">
          <span>LIHAT WEBSITE</span> →
        </a>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 space-y-6">
    
    <!-- Header Title & Stats -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 bg-white p-6 rounded border border-stone-200 shadow-xs">
      <div>
        <h1 class="font-serif text-2xl sm:text-3xl font-normal text-stone-900">
          Daftar Saran & Masukan Pelanggan
        </h1>
        <p class="text-xs text-stone-500 pt-1">
          Pesan yang dikirim pengunjung melalui formulir "Bagikan saran Anda" di halaman kontak.
        </p>
      </div>
      <div class="flex items-center gap-3">
        <div class="px-4 py-2 bg-stone-50 border border-stone-200 rounded text-center">
          <span class="text-[10px] uppercase tracking-widest text-stone-400 block">TOTAL SARAN</span>
          <span class="font-serif text-xl font-bold text-stone-800"><?php echo count($feedbacks); ?></span>
        </div>
      </div>
    </div>

    <!-- Feedback Message Banner -->
    <?php if (!empty($message)): ?>
      <div class="p-4 bg-emerald-50 border border-emerald-200 text-emerald-800 rounded text-xs flex items-center gap-2">
        <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
        <span><?php echo htmlspecialchars($message); ?></span>
      </div>
    <?php endif; ?>

    <!-- Table of Feedbacks -->
    <div class="bg-white rounded border border-stone-200 shadow-xs overflow-hidden">
      <?php if (empty($feedbacks)): ?>
        <div class="p-12 text-center space-y-3">
          <div class="w-12 h-12 rounded-full bg-stone-100 flex items-center justify-center mx-auto text-stone-400">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
          </div>
          <p class="text-sm text-stone-600 font-medium">Belum ada saran yang masuk.</p>
          <p class="text-xs text-stone-400">Pengunjung dapat mengirimkan saran melalui formulir di halaman Kontak.</p>
          <div class="pt-2">
            <a href="contact.php" class="btn-dark text-xs py-2 px-4">Coba Kirim Saran</a>
          </div>
        </div>
      <?php else: ?>
        <div class="overflow-x-auto">
          <table class="w-full text-left text-xs">
            <thead class="bg-stone-50 border-b border-stone-200 text-stone-500 uppercase tracking-wider text-[10px]">
              <tr>
                <th class="py-3.5 px-4 font-semibold">ID</th>
                <th class="py-3.5 px-4 font-semibold">Tanggal</th>
                <th class="py-3.5 px-4 font-semibold">Nama Pengirim</th>
                <th class="py-3.5 px-4 font-semibold">Subjek</th>
                <th class="py-3.5 px-4 font-semibold">Pesan / Saran</th>
                <th class="py-3.5 px-4 font-semibold">Status</th>
                <th class="py-3.5 px-4 font-semibold text-right">Aksi</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-stone-100">
              <?php foreach ($feedbacks as $fb): ?>
                <tr class="hover:bg-stone-50/80 transition-colors <?php echo ($fb['status'] ?? '') === 'unread' ? 'bg-amber-50/30' : ''; ?>">
                  <td class="py-4 px-4 font-mono text-stone-400">#<?php echo $fb['id']; ?></td>
                  <td class="py-4 px-4 text-stone-500 whitespace-nowrap">
                    <?php echo htmlspecialchars($fb['created_at'] ?? '-'); ?>
                  </td>
                  <td class="py-4 px-4 font-medium text-stone-900 whitespace-nowrap">
                    <?php echo htmlspecialchars($fb['nama']); ?>
                  </td>
                  <td class="py-4 px-4 font-semibold text-stone-800 whitespace-nowrap">
                    <?php echo htmlspecialchars($fb['subjek']); ?>
                  </td>
                  <td class="py-4 px-4 text-stone-600 max-w-md">
                    <p class="line-clamp-2"><?php echo nl2br(htmlspecialchars($fb['pesan'])); ?></p>
                  </td>
                  <td class="py-4 px-4 whitespace-nowrap">
                    <?php if (($fb['status'] ?? '') === 'read'): ?>
                      <span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-semibold bg-stone-100 text-stone-700">Dibaca</span>
                    <?php else: ?>
                      <span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-semibold bg-emerald-100 text-emerald-800">Baru</span>
                    <?php endif; ?>
                  </td>
                  <td class="py-4 px-4 text-right whitespace-nowrap space-x-2">
                    <form method="POST" class="inline">
                      <input type="hidden" name="action" value="toggle_status">
                      <input type="hidden" name="id" value="<?php echo $fb['id']; ?>">
                      <button type="submit" class="text-stone-500 hover:text-stone-800 underline">
                        <?php echo ($fb['status'] ?? '') === 'read' ? 'Tandai Baru' : 'Tandai Dibaca'; ?>
                      </button>
                    </form>
                    
                    <form method="POST" class="inline" onsubmit="return confirm('Hapus saran ini?');">
                      <input type="hidden" name="action" value="delete">
                      <input type="hidden" name="id" value="<?php echo $fb['id']; ?>">
                      <button type="submit" class="text-rose-600 hover:text-rose-800 underline">
                        Hapus
                      </button>
                    </form>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      <?php endif; ?>
    </div>

  </main>

</body>
</html>
