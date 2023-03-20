<?php
require("inc/header.php");
?>
        
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <h1>Create New User</h1>
            <form action="handlers/insert-user.php" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name= "Name" class="form-control" id="name" placeholder="Enter name">
                    <small class="form-text text-muted">Help message here.</small>
                </div>

                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" name= "Email" class="form-control" id="name" placeholder="Enter email">
                    <small class="form-text text-muted">Help message here.</small>
                </div>

                <div class="form-group">
                    <label for="name">Password</label>
                    <input type="password" name="Password" class="form-control" id="name" placeholder="Enter Password">
                    <small class="form-text text-muted">Help message here.</small>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>
<?php require ("inc/footer.php"); ?>