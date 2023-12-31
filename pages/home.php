<!DOCTYPE html>

<?php
    include_once('../utils/init.php');
    include_once('../templates/head.php');
    include_once('../database/department.php');

    $departments = getAllDepartments();
?>
<body id=home_body>
    <?php include_once ('../templates/default.php');?>
    <section class = "ticketContainer">
        <form class="insertNewPost" method="post" id="newTicket">
            <input type="hidden" id = "csrf" name="csrf" value="<?=$_SESSION['csrf']?>"></input>
            <header>
                <h2 id="ticket_main_title">Ticket</h2>
            </header>
            <div id="hiddenDiv">
                <input type="hidden" value = "<?php echo $_SESSION['id'] ?>" name = "user_id">
            </div>
            <div class="homeInput">
                <input type="text" id="ticketSubject" name = "ticketSubject" placeholder="Subject">
                <p id="subject_invalid"></p>
            </div>
            <div class="homeInput">
                <textarea id="newPostText" name="newPostText" placeholder="Write Here" required></textarea>
            </div>
            <div class="homeInput">
                <select name="ticketDepartment" id="ticketDepartment">
                    <?php
                        foreach ($departments as $department) {
                            echo '<option value="' . $department["id"] . '">' . $department["name"] . '</option>';
                        }
                    ?>
                </select>
            </div>
            <button type="submit">Post</button>
        </form>
    </section>
    
    <script src="../scripts/ticket.js" defer></script>
</body>
<?php

    include_once('../templates/footer.php');
    
?>

 
 