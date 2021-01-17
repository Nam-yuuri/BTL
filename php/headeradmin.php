<nav class="navbar navbar-expand-md navbar-light bg-light text-white sticky-top pb-0" style="width:100%">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="collapsibleNavbar">
        <ul class="navbar-nav nav-fill nav-tabs" style="width:100%">
        <li class="nav-item">
            <a class="nav-link home" href="Homeadmin.php?id=<?php  echo  $_SESSION['name'] ?>">HOME</a>
        </li>
        <li class="nav-item">
            <a class="nav-link about" href="aboutadmin.php?id=<?php echo  $_SESSION['name'] ?>">ABOUT</a>
        </li>
        <li class="nav-item">
            <a class="nav-link resume" href="resumeadmin.php?id=<?php echo  $_SESSION['name'] ?>">RESUME</a>
        </li>
        <li class="nav-item">
            <a class="nav-link contact" href="contactadmin.php">CONTACT</a>
        </li>
        <li class="nav-item">
            <a class="nav-link work" href="workadmin.php?id=<?php echo  $_SESSION['name'] ?>">WORK</a>
        </li>
        <ul class="nav navbar-nav ">
            <li class="dropdown" ><a class="dropdown-toggle"  data-toggle="dropdown" href="#">Account <i class="fas fa-user-alt" style="font-size:150%;padding-top:5px;"></i><span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="login_index.php"><i class="fas fa-sign-out-alt"></i> LOG OUT</a>
                    </li>
                </ul>
            </li>
        </ul>   
        <li class="nav-item">
            <a class="nav-link account" href="accountadmin.php">Manage</a>
        </li>
        </ul>
    </div>
    </nav>    <!-- Optional JavaScript -->
