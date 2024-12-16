<?php
$currentPage = basename($_SERVER['REQUEST_URI']);
?>
<aside id="Side-Menu-Container">
    <nav id="MainNavigation">
        <h4>Navigation Menu</h4>
        <ul>
            <li>
                <a href="../index.php" class="nav-links <?php echo ($currentPage == 'index.php') ? 'NavigationActive' : ''; ?>">
                    <svg fill="#64C5B1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19,5V7H15V5H19M9,5V11H5V5H9M19,13V19H15V13H19M9,17V19H5V17H9M21,3H13V9H21V3M11,3H3V13H11V3M21,11H13V21H21V11M11,15H3V21H11V15Z" />
                    </svg>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="../farms.php" class="nav-links <?php echo ($currentPage == 'farms.php') ? 'NavigationActive' : ''; ?>">
                    <svg fill="#64C5B1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 21H17V19H20V21M20 17H17V15H20V17M20 13H17V11H20V13M24 7.8C23.6 4.5 20.8 2 17.5 2C15.8 2 14.1 2.7 12.9 3.9C12.2 4.6 11.7 5.3 11.4 6.2L15.6 9H22V22H24V7.8M13.3 7C13.9 5.2 15.6 4 17.5 4S21.1 5.2 21.7 7H13.3M7.5 6L0 11V22H15V11L7.5 6M13 20H10V14H5V20H2V12L7.5 8.5L13 12V20Z" />
                    </svg>
                    <span>Farms</span>
                </a>
            </li>
            <li>
                <a href="../owner-accounts.php" class="nav-links <?php echo ($currentPage == 'owner-accounts.php') ? 'NavigationActive' : ''; ?>">
                    <svg fill="#64C5B1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                        <path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192l42.7 0c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0L21.3 320C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7l42.7 0C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3l-213.3 0zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352l117.3 0C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7l-330.7 0c-14.7 0-26.7-11.9-26.7-26.7z" />
                    </svg>
                    <span>Owner Accounts</span>
                </a>
            </li>
            <li>
                <a href="../schedules.php" class="nav-links <?php echo ($currentPage == 'schedules.php') ? 'NavigationActive' : ''; ?>">
                    <svg fill="#64C5B1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 40L64 64C28.7 64 0 92.7 0 128l0 16 0 48L0 448c0 35.3 28.7 64 64 64l320 0c35.3 0 64-28.7 64-64l0-256 0-48 0-16c0-35.3-28.7-64-64-64l-40 0 0-40c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 40L152 64l0-40zM48 192l352 0 0 256c0 8.8-7.2 16-16 16L64 464c-8.8 0-16-7.2-16-16l0-256z" />
                    </svg>
                    <span>Schedules</span>
                </a>
            </li>
            <li>
                <a href="../announcements.php" class="nav-links <?php echo ($currentPage == 'announcements.php') ? 'NavigationActive' : ''; ?>">
                    <svg fill="#64C5B1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M480 32c0-12.9-7.8-24.6-19.8-29.6s-25.7-2.2-34.9 6.9L381.7 53c-48 48-113.1 75-181 75l-8.7 0-32 0-96 0c-35.3 0-64 28.7-64 64l0 96c0 35.3 28.7 64 64 64l0 128c0 17.7 14.3 32 32 32l64 0c17.7 0 32-14.3 32-32l0-128 8.7 0c67.9 0 133 27 181 75l43.6 43.6c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6l0-147.6c18.6-8.8 32-32.5 32-60.4s-13.4-51.6-32-60.4L480 32zm-64 76.7L416 240l0 131.3C357.2 317.8 280.5 288 200.7 288l-8.7 0 0-96 8.7 0c79.8 0 156.5-29.8 215.3-83.3z" />
                    </svg>
                    <span>Announcements</span>
                </a>
            </li>
            <li>
                <a href="../account-applications.php" class="nav-links <?php echo ($currentPage == 'account-applications.php') ? 'NavigationActive' : ''; ?>">
                    <svg fill="#64C5B1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M64 464c-8.8 0-16-7.2-16-16L48 64c0-8.8 7.2-16 16-16l160 0 0 80c0 17.7 14.3 32 32 32l80 0 0 288c0 8.8-7.2 16-16 16L64 464zM64 0C28.7 0 0 28.7 0 64L0 448c0 35.3 28.7 64 64 64l256 0c35.3 0 64-28.7 64-64l0-293.5c0-17-6.7-33.3-18.7-45.3L274.7 18.7C262.7 6.7 246.5 0 229.5 0L64 0zm56 256c-13.3 0-24 10.7-24 24s10.7 24 24 24l144 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-144 0zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24l144 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-144 0z" />
                    </svg>
                    <span>Account Application</span>
                </a>
            </li>
            <li>
                <a href="../farm-applications.php" class="nav-links <?php echo ($currentPage == 'farm-applications.php') ? 'NavigationActive' : ''; ?>">
                    <svg fill="#64C5B1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M64 464c-8.8 0-16-7.2-16-16L48 64c0-8.8 7.2-16 16-16l160 0 0 80c0 17.7 14.3 32 32 32l80 0 0 288c0 8.8-7.2 16-16 16L64 464zM64 0C28.7 0 0 28.7 0 64L0 448c0 35.3 28.7 64 64 64l256 0c35.3 0 64-28.7 64-64l0-293.5c0-17-6.7-33.3-18.7-45.3L274.7 18.7C262.7 6.7 246.5 0 229.5 0L64 0zm56 256c-13.3 0-24 10.7-24 24s10.7 24 24 24l144 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-144 0zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24l144 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-144 0z" />
                    </svg>
                    <span>Farm Application</span>
                </a>
            </li>
            <li>
                <a href="../schedule-applications.php" class="nav-links <?php echo ($currentPage == 'schedule-applications.php') ? 'NavigationActive' : ''; ?>">
                    <svg fill="#64C5B1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M64 464c-8.8 0-16-7.2-16-16L48 64c0-8.8 7.2-16 16-16l160 0 0 80c0 17.7 14.3 32 32 32l80 0 0 288c0 8.8-7.2 16-16 16L64 464zM64 0C28.7 0 0 28.7 0 64L0 448c0 35.3 28.7 64 64 64l256 0c35.3 0 64-28.7 64-64l0-293.5c0-17-6.7-33.3-18.7-45.3L274.7 18.7C262.7 6.7 246.5 0 229.5 0L64 0zm56 256c-13.3 0-24 10.7-24 24s10.7 24 24 24l144 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-144 0zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24l144 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-144 0z" />
                    </svg>
                    <span>Schedule Application</span>
                </a>
            </li>
            <li>
                <a href="../veterinarians.php" class="nav-links <?php echo ($currentPage == 'veterinarians.php') ? 'NavigationActive' : ''; ?>">
                    <svg fill="#64C5B1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-96 55.2C54 332.9 0 401.3 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7c0-81-54-149.4-128-171.1l0 50.8c27.6 7.1 48 32.2 48 62l0 40c0 8.8-7.2 16-16 16l-16 0c-8.8 0-16-7.2-16-16s7.2-16 16-16l0-24c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 24c8.8 0 16 7.2 16 16s-7.2 16-16 16l-16 0c-8.8 0-16-7.2-16-16l0-40c0-29.8 20.4-54.9 48-62l0-57.1c-6-.6-12.1-.9-18.3-.9l-91.4 0c-6.2 0-12.3 .3-18.3 .9l0 65.4c23.1 6.9 40 28.3 40 53.7c0 30.9-25.1 56-56 56s-56-25.1-56-56c0-25.4 16.9-46.8 40-53.7l0-59.1zM144 448a24 24 0 1 0 0-48 24 24 0 1 0 0 48z" />
                    </svg>
                    <span>Veterinarians</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>
<script>
    const SideMenuButton = document.querySelector(".side-menu-collapse");
    if (SideMenuButton) {
        if (SideMenuButton != undefined) {
            SideMenuButton.onclick = SideBarMenuToggleEvent;
        }
    }
    const DropdownButton = document.querySelectorAll(".DropdownMenu");
    if (DropdownButton) {
        function AttachSideMenuEvent() {
            if (DropdownButton.length > 0) {
                DropdownButton.forEach(button => {
                    let list = button.querySelector(".DropdownMenuList");
                    button.querySelector(".DropdownButton").onclick = function() {
                        list.classList.toggle("show")
                        if (list.classList.contains("show")) {
                            list.style.maxHeight = list.scrollHeight + "px";
                        } else {
                            list.style.maxHeight = 0 + "px";
                        }
                    }
                });
            }
        }
        AttachSideMenuEvent();
    }

    function SideBarMenuToggleEvent() {
        const sideMenu = document.querySelector("#Side-Menu-Container")
        const logo = document.querySelector("#Logo")
        const root = document.querySelector(':root');
        const liElements = document.querySelectorAll("#MainNavigation > ul > li");
        if (getComputedStyle(document.documentElement).getPropertyValue('--sidebar-toggle') == '16rem') {
            root.style.setProperty('--sidebar-toggle', '4rem');
            document.querySelector("#MainNavigation > h4").style.display = "none";
            if (logo) {
                logo.lastElementChild.style.display = "none";
            }
            liElements.forEach(function(li) {
                li.querySelector("span").style.display = "none";
                if (li.classList.contains("DropdownMenu")) {
                    const list = li.querySelector(".DropdownMenuList");
                    if (li.querySelector(".DropdownMenuList").classList.contains("show")) {
                        li.querySelector(".DropdownMenuList").classList.remove("show");
                    }
                    li.querySelector(".DropdownButton").onclick = null;
                    list.style.maxHeight = 0 + "px";
                    list.classList.add("absolute");
                    li.classList.add("flex");
                    li.querySelector("svg:nth-of-type(2)").style.display = "none";
                    li.onmouseover = function() {
                        list.style.maxHeight = list.scrollHeight + "px";
                    }
                    li.onmouseout = function() {
                        list.style.maxHeight = 0 + "px";
                    }
                }
            });
        } else {
            root.style.setProperty('--sidebar-toggle', '16rem');
            document.querySelector("#MainNavigation > h4").style.display = "block";
            liElements.forEach(function(li) {
                if (li.classList.contains("DropdownMenu")) {
                    let list = li.querySelector(".DropdownMenuList");
                    list.classList.remove("absolute");
                    li.classList.remove("flex");
                    li.onmouseover = null;
                    li.onmouseout = null;
                }
            });
            setTimeout(() => {
                liElements.forEach(function(li) {
                    li.querySelector("span").style.display = "block";
                    if (logo) {
                        logo.lastElementChild.style.display = "block";
                    }
                    if (li.classList.contains("DropdownMenu")) {
                        AttachSideMenuEvent();
                        li.querySelector("svg:nth-of-type(2)").style.display = "block";
                    }
                });
            }, 300);
        }
    }
</script>