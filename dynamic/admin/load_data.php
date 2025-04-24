<?php
header('Content-Type: application/json');
$category = isset($_POST['category']) ? $_POST['category'] : '';
$search = isset($_POST['search']) ? $_POST['search'] : '';
if (!in_array($category, ['students', 'instructors', 'staff'])) {
    echo json_encode(['error' => 'Invalid category']);
    exit;
}
$file_path = "data/{$category}.csv";
if (!file_exists($file_path)) {
    echo json_encode(['error' => 'Data file not found']);
    exit;
}
$data = [];
if (($handle = fopen($file_path, "r")) !== FALSE) {
    $headers = fgetcsv($handle, 1000, ",");
    while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $record = [];
        foreach ($headers as $index => $header) {
            $record[$header] = $row[$index];
        }
        if (empty($search) || containsSearchTerm($record, $search)) {
            $data[] = $record;
        }
    }
    fclose($handle);
}
echo json_encode($data);
exit;

function containsSearchTerm($record, $search) {
    $search = strtolower($search);
    foreach ($record as $value) {
        if (strpos(strtolower($value), $search) !== false) {
            return true;
        }
    }
    return false;
}
?>