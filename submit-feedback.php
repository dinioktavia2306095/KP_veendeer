<?php

/**
 * Submit Feedback Handler
 */
header('Content-Type: application/json');

require_once __DIR__.'/includes/database.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'status' => 'error',
        'message' => 'Metode request tidak diizinkan.',
    ]);
    exit;
}

$nama = isset($_POST['nama']) ? trim($_POST['nama']) : '';
$subjek = isset($_POST['subjek']) ? trim($_POST['subjek']) : '';
$pesan = isset($_POST['pesan']) ? trim($_POST['pesan']) : '';

if (empty($nama) || empty($subjek) || empty($pesan)) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Mohon lengkapi semua bidang (Nama, Subjek, dan Pesan).',
    ]);
    exit;
}

$db = getDb();

if (! $db) {
    // If DB is unavailable, save as fallback to JSON log file
    $log_dir = __DIR__.'/database';
    if (! is_dir($log_dir)) {
        mkdir($log_dir, 0777, true);
    }
    $entry = [
        'id' => time(),
        'nama' => htmlspecialchars($nama),
        'subjek' => htmlspecialchars($subjek),
        'pesan' => htmlspecialchars($pesan),
        'created_at' => date('Y-m-d H:i:s'),
        'status' => 'unread',
    ];
    $json_file = $log_dir.'/feedbacks.json';
    $existing = file_exists($json_file) ? json_decode(file_get_contents($json_file), true) : [];
    if (! is_array($existing)) {
        $existing = [];
    }
    array_unshift($existing, $entry);
    file_put_contents($json_file, json_encode($existing, JSON_PRETTY_PRINT));

    echo json_encode([
        'status' => 'success',
        'message' => 'Terima kasih atas saran Anda! Masukan Anda sangat berharga bagi Vee\'n Dee Corner.',
    ]);
    exit;
}

try {
    $stmt = $db->prepare("INSERT INTO feedbacks (nama, subjek, pesan, status) VALUES (:nama, :subjek, :pesan, 'unread')");
    $stmt->execute([
        ':nama' => $nama,
        ':subjek' => $subjek,
        ':pesan' => $pesan,
    ]);

    echo json_encode([
        'status' => 'success',
        'message' => 'Terima kasih! Saran Anda telah kami terima dan akan kami baca dengan saksama.',
    ]);
} catch (Exception $e) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Terjadi kesalahan sistem saat menyimpan pesan Anda.',
    ]);
}
