<nav class="menu">
            <div class="menu-branding">
                <div class="portrait">

                </div>
            </div>
            <ul class="menu-nav">
                <li class="nav-item <?php if ($current_doc_name == 'index') { echo 'current';} ?>">
                    <a href="index.php" class="nav-link">
                        Home
                    </a>
                </li>
                <li class="nav-item <?php if ($current_doc_name == 'about') { echo 'current';} ?>">
                    <a href="about.php" class="nav-link">
                        About Me
                    </a>
                </li>
                <li class="nav-item <?php if ($current_doc_name == 'work') { echo 'current';} ?>">
                    <a href="work.php" class="nav-link">
                        My Work
                    </a>
                    <li class="nav-item <?php if ($current_doc_name == 'contact') { echo 'current';} ?>">
                        <a href="contact.php" class="nav-link">
                            How to Reach Me
                        </a>
                    </li>
                </li>
            </ul>
        </nav>