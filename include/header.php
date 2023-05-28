<nav class="navbar navbar-expand-sm bg-dark navbar-dark " href="#">
        <a href="#" class="navbar-brand">
            <?php
                $user = $_SESSION['user_email'];
                $get_user = "select * from users where user_email = '$user'";
                $run_user = mysqli_query($con, $get_user);
                $row = mysqli_fetch_array($run_user);

                $user_name = $row['user_name'];
                echo "<a class='navbar-brand' href='home.php?user_name=$user_name'>MyChat</a>";

            ?>    
        </a>
        <ul class="navbar-nav">
                <li>
                    <a style = "color: white; text-decoration: none; font-size: 20px;" 
                    href="account_settings.php">Settings</a>
                </li>
            </ul>
    </nav><br>