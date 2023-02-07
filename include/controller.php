<?php

//Check for submit
if (isset(
    $_POST['submit'],
    $_POST['inputFirstName'],
    $_POST['inputLastName'],
    $_POST['inputEmail'],
    $_POST['inputText'],
    //Honeypot
    $_POST['name']
)) {
    //Get form data and sanitize
    $honeypot = htmlspecialchars($_POST['name']);
    $firstName = trim(htmlspecialchars($_POST['inputFirstName']));
    $lastName = trim(htmlspecialchars($_POST['inputLastName']));
    $email = trim(filter_var($_POST['inputEmail']), FILTER_SANITIZE_EMAIL);
    $text = trim(htmlspecialchars($_POST['inputText']));
    if (
        //Check required fields and honeypot
        empty($honeypot)
        && !empty($firstName)
        && !empty($lastName)
        && !empty($email)
        && !empty($text)
    ) {
        //Passed
        if (
            //Check length
            strlen($firstName) <= 50 &&
            strlen($firstName) <= 50 &&
            strlen($email) <= 50 &&
            strlen($text) <= 2000
        ) {
            //Passed
            if (
                //Check firstName and lastName input
                preg_match("/^[A-Za-z .'-]+$/", $firstName) &&
                (preg_match("/^[A-Za-z .'-]+$/", $lastName))
            ) {
                //Passed
                if (
                    //Check email
                    filter_var($email, FILTER_VALIDATE_EMAIL)
                ) {
                    if (
                        //Sending mail
                        sendMail($firstName, $lastName, $email, $text) == TRUE &&
                        //Sending confirmation mail
                        sendConfirmationMail($firstName, $lastName, $email) == TRUE
                    ) {
                        //Success
                        $msg['message'] = [
                            'code' => 'success',
                            'text' => 'Votre message a bien été envoyé'
                        ];
                        require_once 'index.php';
                    } else {
                        //Fail php mailer
                        $msg['message'] = [
                            'code' => 'warning',
                            'text' => 'Une erreur est survenue'
                        ];
                        require_once 'index.php';
                    }
                } else {
                    //Fail email
                    $msg['message'] = [
                        'code' => 'warning',
                        'text' => 'Merci de saisir un email valide'
                    ];
                    require_once 'index.php';
                }
            } else {
                //firstName or lastName fail
                $msg['message'] = [
                    'code' => 'warning',
                    'text' => 'Merci de saisir une identité valide'
                ];
                require_once 'index.php';
            }
        } else {
            //Length fail
            $msg['message'] = [
                'code' => 'warning',
                'text' => 'Merci de remplir correctement les champs'
            ];
            require_once 'index.php';
        }
    } else {
        //Fail : empty input
        $msg['message'] = [
            'code' => 'warning',
            'text' => 'Merci de remplir tous les champs'
        ];
        require_once 'index.php';
    }
}
