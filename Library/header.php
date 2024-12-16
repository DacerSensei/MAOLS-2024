<header>
    <div id="Logo">
        <img src="/Assets/Logo.png">
        <h4>Agriculture Livestock</h4>
    </div>
    <div class="header-menu">
        <button class="side-menu-collapse DefaultButton">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
            </svg>
        </button>

        <div class="User-Profile-Container">
            <ul>
                <li>
                    <button class="btn-message DefaultButton header-button" id="user-message-btn">
                        <svg fill="#323246" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" />
                            <foreignObject width="100%" height="100%">
                                <span></span>
                            </foreignObject>
                        </svg>
                    </button>
                    <ul class="header-message-content">
                        <h4>Messages</h4>
                    </ul>
                </li>
                <li class="border-left">
                    <button class="btn-notification DefaultButton header-button" id="user-notification-btn">
                        <svg fill="#323246" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M21,19V20H3V19L5,17V11C5,7.9 7.03,5.17 10,4.29C10,4.19 10,4.1 10,4A2,2 0 0,1 12,2A2,2 0 0,1 14,4C14,4.1 14,4.19 14,4.29C16.97,5.17 19,7.9 19,11V17L21,19M14,21A2,2 0 0,1 12,23A2,2 0 0,1 10,21" />
                            <foreignObject width="100%" height="100%">
                                <span></span>
                            </foreignObject>
                        </svg>
                    </button>
                    <ul class="header-notification-content">
                        <h4>Notifications</h4>
                    </ul>
                </li>
                <li>
                    <button class="btn-profile DefaultButton header-button" id="user-profile-btn">
                        <div>
                            <img src="/Assets/Logo.png" alt="" class="user-profile-picture">
                        </div>
                        <h3 class="user-profile-name"></h3>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M7,10L12,15L17,10H7Z" />
                        </svg>
                    </button>
                    <ul>
                        <h4>Settings</h4>
                        <button class="DefaultButton" id="LogoutButton">
                            <div>
                                <svg class="Fill-Red" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M14.08,15.59L16.67,13H7V11H16.67L14.08,8.41L15.5,7L20.5,12L15.5,17L14.08,15.59M19,3A2,2 0 0,1 21,5V9.67L19,7.67V5H5V19H19V16.33L21,14.33V19A2,2 0 0,1 19,21H5C3.89,21 3,20.1 3,19V5C3,3.89 3.89,3 5,3H19Z" />
                                </svg>
                            </div>
                            <h4>Logout</h4>
                        </button>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</header>
<script>
    const HeaderButtons = document.getElementsByClassName("header-button");
    if (HeaderButtons) {
        if (HeaderButtons.length > 0) {
            for (let i = 0; i < HeaderButtons.length; i++) {
                HeaderButtons[i].onclick = function() {

                    for (let j = 0; j < HeaderButtons.length; j++) {
                        let list = HeaderButtons[j].parentNode.getElementsByTagName("ul")[0].classList;
                        if (i == j) continue;
                        if (list.contains("Show")) {
                            list.remove("Show");
                        }
                    }
                    HeaderButtons[i].parentNode.getElementsByTagName("ul")[0].classList.toggle("Show");
                }
            }
        }
    }
    document.getElementById('LogoutButton').addEventListener('click', function() {
        // Create a form dynamically
        var form = document.createElement('form');
        form.method = 'POST';
        form.action = '/config/API/logout.php';

        // Create a hidden input to trigger the logout action
        var logoutInput = document.createElement('input');
        logoutInput.type = 'hidden';
        logoutInput.name = 'logout';
        logoutInput.value = 'true';

        form.appendChild(logoutInput);

        // Append the form to the body
        document.body.appendChild(form);

        // Submit the form
        form.submit();
    });
</script>