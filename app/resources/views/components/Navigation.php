    <nav class="container  d-flex    ">

        <a href="<?= createLink("/") ?>">
            <h2>FastTrain</h2>
        </a>

        <div class="container_items  m-3">
            <ul class="d-flex  ">
                <li><a href="<?= createLink("/") ?>">Home</a></li>
                <li><a href="<?= createLink("/login") ?>">login</a></li>
                <li><a href="<?= createLink("/register") ?>">sign in</a></li>


                <?php if (isLoggedIn() && !isAdmin()) : ?>
                    <li><a href="<?= createLink("/user/reservation") ?>">Mes Reservation</a></li>
                    <li><a href="<?= createLink("/logout") ?>">Logout</a></li>
                <?php endif; ?>
                <?php if (isAdmin()) : ?>
                    <li><a href="<?= createLink("/voyage") ?>">Voyage</a></li>
                    <li><a href="<?= createLink("/logout") ?>">Logout</a></li>
                <?php endif; ?>
            </ul>
        </div>
        <div>


    </nav>