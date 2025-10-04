<?php
/**
 * Contact Form Handler
 * Green Engineering - greenenginnering.md
 * PHP 8.0 Compatible
 */

// Set response header
header('Content-Type: application/json');

// Enable error reporting for development (disable in production)
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// Response array
$response = [
    'success' => false,
    'message' => ''
];

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Sanitize and validate input
    $name = isset($_POST['name']) ? trim(htmlspecialchars($_POST['name'])) : '';
    $email = isset($_POST['email']) ? trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)) : '';
    $phone = isset($_POST['phone']) ? trim(htmlspecialchars($_POST['phone'])) : '';
    $message = isset($_POST['message']) ? trim(htmlspecialchars($_POST['message'])) : '';
    
    // Validation
    $errors = [];
    
    if (empty($name)) {
        $errors[] = 'Numele este obligatoriu';
    }
    
    if (empty($email)) {
        $errors[] = 'Email-ul este obligatoriu';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Format de email invalid';
    }
    
    if (empty($message)) {
        $errors[] = 'Mesajul este obligatoriu';
    }
    
    // If validation passes
    if (empty($errors)) {
        
        // TODO: Update these values with your actual contact information
        $to = 'info@greenenginnering.md'; // Your email address
        $subject = 'Nouă Solicitare de Contact - Green Engineering';
        
        // Email body
        $emailBody = "
Nouă Solicitare de Contact

Nume: {$name}
Email: {$email}
Telefon: {$phone}

Mesaj:
{$message}

---
Trimis din formularul de contact greenenginnering.md
Data: " . date('Y-m-d H:i:s') . "
Adresă IP: " . $_SERVER['REMOTE_ADDR'] . "
        ";
        
        // Email headers
        $headers = [
            'From: noreply@greenenginnering.md',
            'Reply-To: ' . $email,
            'X-Mailer: PHP/' . phpversion(),
            'Content-Type: text/plain; charset=UTF-8'
        ];
        
        // Send email
        $mailSent = mail($to, $subject, $emailBody, implode("\r\n", $headers));
        
        if ($mailSent) {
            // Optional: Save to database
            // saveToDatabase($name, $email, $phone, $message);
            
            $response['success'] = true;
            $response['message'] = 'Vă mulțumim că ne-ați contactat! Vă vom răspunde în curând.';
        } else {
            $response['message'] = 'Eroare la trimiterea email-ului. Vă rugăm încercați mai târziu.';
            
            // Log error for debugging
            error_log('Contact form email failed to send');
        }
        
    } else {
        $response['message'] = implode(', ', $errors);
    }
    
} else {
    $response['message'] = 'Metodă de cerere invalidă';
}

// Return JSON response
echo json_encode($response);

/**
 * Optional: Function to save contact form submissions to database
 * Uncomment and configure when ready to use
 */
/*
function saveToDatabase($name, $email, $phone, $message) {
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=your_database', 'username', 'password');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $stmt = $pdo->prepare('
            INSERT INTO contact_submissions (name, email, phone, message, submitted_at, ip_address) 
            VALUES (:name, :email, :phone, :message, NOW(), :ip)
        ');
        
        $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':phone' => $phone,
            ':message' => $message,
            ':ip' => $_SERVER['REMOTE_ADDR']
        ]);
        
        return true;
    } catch (PDOException $e) {
        error_log('Database error: ' . $e->getMessage());
        return false;
    }
}
*/
?>
