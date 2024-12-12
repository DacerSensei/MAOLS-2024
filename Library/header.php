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
                        <button class="DefaultButton">
                            <div>
                                <svg class="Fill-Green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M10.25,2C10.44,2 10.61,2.11 10.69,2.26L12.91,6.22L13,6.5L12.91,6.78L10.69,10.74C10.61,10.89 10.44,11 10.25,11H5.75C5.56,11 5.39,10.89 5.31,10.74L3.09,6.78L3,6.5L3.09,6.22L5.31,2.26C5.39,2.11 5.56,2 5.75,2H10.25M10.25,13C10.44,13 10.61,13.11 10.69,13.26L12.91,17.22L13,17.5L12.91,17.78L10.69,21.74C10.61,21.89 10.44,22 10.25,22H5.75C5.56,22 5.39,21.89 5.31,21.74L3.09,17.78L3,17.5L3.09,17.22L5.31,13.26C5.39,13.11 5.56,13 5.75,13H10.25M19.5,7.5C19.69,7.5 19.86,7.61 19.94,7.76L22.16,11.72L22.25,12L22.16,12.28L19.94,16.24C19.86,16.39 19.69,16.5 19.5,16.5H15C14.81,16.5 14.64,16.39 14.56,16.24L12.34,12.28L12.25,12L12.34,11.72L14.56,7.76C14.64,7.61 14.81,7.5 15,7.5H19.5Z" />
                                </svg>
                            </div>
                            <h4>Settings</h4>
                        </button>
                        <button class="DefaultButton" onclick="window.location.href='/MWSSS-Application/PHP-API/Logout/LogoutAction.php'">
                            <div>
                                <svg class="Fill-Red" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M14.08,15.59L16.67,13H7V11H16.67L14.08,8.41L15.5,7L20.5,12L15.5,17L14.08,15.59M19,3A2,2 0 0,1 21,5V9.67L19,7.67V5H5V19H19V16.33L21,14.33V19A2,2 0 0,1 19,21H5C3.89,21 3,20.1 3,19V5C3,3.89 3.89,3 5,3H19Z" />
                                </svg>
                            </div>
                            <h4>Logout</h4>
                        </button>
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
                        <button class="DefaultButton">
                            <div>
                                <svg class="Fill-Green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M10.25,2C10.44,2 10.61,2.11 10.69,2.26L12.91,6.22L13,6.5L12.91,6.78L10.69,10.74C10.61,10.89 10.44,11 10.25,11H5.75C5.56,11 5.39,10.89 5.31,10.74L3.09,6.78L3,6.5L3.09,6.22L5.31,2.26C5.39,2.11 5.56,2 5.75,2H10.25M10.25,13C10.44,13 10.61,13.11 10.69,13.26L12.91,17.22L13,17.5L12.91,17.78L10.69,21.74C10.61,21.89 10.44,22 10.25,22H5.75C5.56,22 5.39,21.89 5.31,21.74L3.09,17.78L3,17.5L3.09,17.22L5.31,13.26C5.39,13.11 5.56,13 5.75,13H10.25M19.5,7.5C19.69,7.5 19.86,7.61 19.94,7.76L22.16,11.72L22.25,12L22.16,12.28L19.94,16.24C19.86,16.39 19.69,16.5 19.5,16.5H15C14.81,16.5 14.64,16.39 14.56,16.24L12.34,12.28L12.25,12L12.34,11.72L14.56,7.76C14.64,7.61 14.81,7.5 15,7.5H19.5Z" />
                                </svg>
                            </div>
                            <h4>Settings</h4>
                        </button>
                        <button class="DefaultButton" onclick="window.location.href='/MWSSS-Application/PHP-API/Logout/LogoutAction.php'">
                            <div>
                                <svg class="Fill-Red" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M14.08,15.59L16.67,13H7V11H16.67L14.08,8.41L15.5,7L20.5,12L15.5,17L14.08,15.59M19,3A2,2 0 0,1 21,5V9.67L19,7.67V5H5V19H19V16.33L21,14.33V19A2,2 0 0,1 19,21H5C3.89,21 3,20.1 3,19V5C3,3.89 3.89,3 5,3H19Z" />
                                </svg>
                            </div>
                            <h4>Logout</h4>
                        </button>
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
                        <button class="DefaultButton" id="ChangePasswordButton"
                            onclick="window.location.href='/change-password.html'">
                            <div>
                                <svg class="Fill-Blue" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M12.63,2C18.16,2 22.64,6.5 22.64,12C22.64,17.5 18.16,22 12.63,22C9.12,22 6.05,20.18 4.26,17.43L5.84,16.18C7.25,18.47 9.76,20 12.64,20A8,8 0 0,0 20.64,12A8,8 0 0,0 12.64,4C8.56,4 5.2,7.06 4.71,11H7.47L3.73,14.73L0,11H2.69C3.19,5.95 7.45,2 12.63,2M15.59,10.24C16.09,10.25 16.5,10.65 16.5,11.16V15.77C16.5,16.27 16.09,16.69 15.58,16.69H10.05C9.54,16.69 9.13,16.27 9.13,15.77V11.16C9.13,10.65 9.54,10.25 10.04,10.24V9.23C10.04,7.7 11.29,6.46 12.81,6.46C14.34,6.46 15.59,7.7 15.59,9.23V10.24M12.81,7.86C12.06,7.86 11.44,8.47 11.44,9.23V10.24H14.19V9.23C14.19,8.47 13.57,7.86 12.81,7.86Z" />
                                </svg>
                            </div>
                            <h4>Change Password</h4>
                        </button>
                        <button class="DefaultButton" id="EditInfoButton"
                            onclick="window.location.href='/update-information.html'">
                            <div>
                                <svg class="Fill-Green" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M21.7,13.35L20.7,14.35L18.65,12.3L19.65,11.3C19.86,11.09 20.21,11.09 20.42,11.3L21.7,12.58C21.91,12.79 21.91,13.14 21.7,13.35M12,18.94L18.06,12.88L20.11,14.93L14.06,21H12V18.94M12,14C7.58,14 4,15.79 4,18V20H10V18.11L14,14.11C13.34,14.03 12.67,14 12,14M12,4A4,4 0 0,0 8,8A4,4 0 0,0 12,12A4,4 0 0,0 16,8A4,4 0 0,0 12,4Z" />
                                </svg>
                            </div>
                            <h4>Edit Information</h4>
                        </button>
                        <button class="DefaultButton" id="AboutButton"
                            onclick="window.location.href='/help.html'">
                            <div>
                                <svg class="Fill-Yellow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M13,9H11V7H13M13,17H11V11H13M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                </svg>
                            </div>
                            <h4>Help</h4>
                        </button>
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
</script>