<?php
// === НАСТРОЙКИ БОТА ===
$bot_token = '8558674326:AAEHoF3fuWbArOWLHWneLBPMrGAMhTXm9rg'; // твой токен
$chat_id   = '470673760';                                      // твой chat_id (ЛС с тобой)

// === ЧТЕНИЕ ДАННЫХ ИЗ ФОРМЫ ===
$team    = trim($_POST['team_name']       ?? '');
$group   = trim($_POST['group']           ?? '');
$contact = trim($_POST['captain_contact'] ?? '');
$players = trim($_POST['players']         ?? '');

// Простая проверка обязательных полей
if ($team === '' || $group === '' || $contact === '') {
    http_response_code(400);
    echo 'Ошибка: заполните все обязательные поля.';
    exit;
}

// === ФОРМИРОВАНИЕ ТЕКСТА ДЛЯ TELEGRAM ===
$text_lines = [
    "🔥 Новая заявка на турнир MLBB",
    "",
    "Команда: {$team}",
    "Группа/кафедра: {$group}",
    "Контакты капитана: {$contact}",
];

if ($players !== '') {
    $text_lines[] = "";
    $text_lines[] = "Участники:";
    $text_lines[] = $players;
}

$text = implode("\n", $text_lines);

// === ОТПРАВКА В TELEGRAM ===
$api_url = "https://api.telegram.org/bot{$bot_token}/sendMessage";

$data = [
    'chat_id'    => $chat_id,
    'text'       => $text,
    'parse_mode' => 'HTML',
];

$options = [
    'http' => [
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
        'timeout' => 5,
    ],
];

$context = stream_context_create($options);
$result  = @file_get_contents($api_url, false, $context);

if ($result === false) {
    echo 'Произошла ошибка при отправке заявки. Попробуйте ещё раз или свяжитесь с организаторами напрямую.';
    exit;
}

// === ПРОСТОЙ ОТВЕТ ПОЛЬЗОВАТЕЛЮ ===
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Заявка отправлена</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif; background:#0f172a; color:#f9fafb; display:flex; justify-content:center; align-items:center; min-height:100vh;">
  <div style="max-width:480px; padding:24px 28px; background:#020617; border-radius:16px; box-shadow:0 20px 60px rgba(15,23,42,0.8); text-align:center;">
    <h1 style="font-size:1.5rem; margin-bottom:0.75rem;">Спасибо!</h1>
    <p style="margin-bottom:0.5rem;">Заявка отправлена организаторам в Telegram.</p>
    <p style="font-size:0.9rem; opacity:0.8;">Вы можете закрыть эту страницу или вернуться назад.</p>
  </div>
</body>
</html>

