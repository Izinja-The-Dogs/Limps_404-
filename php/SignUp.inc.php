<?php

    if (isset($_POST["signup_submit"])) {

        $connection = mysqli_connect("localhost", "root", "Sm*22^03%#", "organization");

        $company_name = $_POST['company_name'];
        $company_email = $_POST['username_company'];
        $password = $_POST['company_password'];
        $passwordRepeat = $_POST['confirm_password'];
        $reg_num = $_POST['registration_no'];
        $vat_num = $_POST['vat_no'];
        $address = $_POST['address1'].",".$_POST['address2'].",".$_POST['address3'];
        $country = $_POST['country_name'];
        $country_code = $_POST['country_code'];

        if (empty($company_name) || empty($company_email) || empty($password) || empty($passwordRepeat) || empty($reg_num)
        || empty($vat_num) || empty($address) || empty($country) || empty($country_code)) {
            header("Location: ../pages/SignUp.php?error=emptyfields");
            exit();
        }
        else if (!filter_var($company_email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $company_name)) {
            header("Location: ../pages/SignUp.php?error=invalidemail&invalidcompanyname");
            exit();
        }
        else if (!filter_var($company_email, FILTER_VALIDATE_EMAIL)) {
            header("Location: ../pages/SignUp.php?error=invalidemail");
            exit();
        }
        // else if (!preg_match("/^[-a-zA-Z0-9]*$/", $company_name)) {
        //     header("Location: ../pages/SignUp.php?error=invalidcompanyname");
        //     exit();
        // }
        else if ($password !== $passwordRepeat) {

            header("Location: ../pages/SignUp.php?error=passwordmismatch&uid=".$company_name."&email=".$company_email."&regnum=".
            $reg_num."&vatnum=".$vat_num."&address=".$address."&country=".$country."countrycode=".$country_code);
            exit();

        }
        else {

            $sql = "SELECT company_name FROM users WHERE company_name=?";
            $stmt = mysqli_stmt_init($connection);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../pages/SignUp.php?error=databaseerror");
                exit();
            }
            else {

                mysqli_stmt_bind_param($stmt, "s", $company_name);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $resultCheck = mysqli_stmt_num_rows($stmt);
                if ($resultCheck > 0) {
                    header("Location: ../pages/SignUp.php?error=usertaken");
                    exit();
                }
                else {

                    $sql = "INSERT INTO users (company_name, email_users, pwd_users, company_reg_num, company_vat_num, company_address,
                    country, country_code) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
                    $stmt = mysqli_stmt_init($connection);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        header("Location: ../pages/SignUp.php?error=databaseerror");
                        exit();
                    }
                    else {
                        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                        mysqli_stmt_bind_param($stmt, "sssssssi", $company_name,$company_email,$hashedPwd,$reg_num,$vat_num,$address,
                        $country,$country_code);
                        mysqli_stmt_execute($stmt);
                        header("Location: ../pages/SignUp.php?signup=success");
                        exit();
                    
                    }

                }

            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($connection);


    }
    else {
        header("Location: ../pages/SignUp.php");
        exit();
    }

