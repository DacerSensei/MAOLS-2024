<header>
    <div id="Logo"></div>
    <div class="header-menu">
        <button class="side-menu-collapse DefaultButton">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
            </svg>
        </button>

        <input id="Search" type="text" class="Textbox-Control" placeholder="Search products">
        <button id="SearchButton" class="DefaultButton">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
            </svg>
        </button>

        <div class="User-Profile-Container">
            <ul>
                <li>
                    <button class="btn-message DefaultButton header-button" id="user-message-btn">
                        <svg class="Fill-Primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
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
                        <svg class="Fill-Primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
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
                            <img src="/MWSSS-Application/Assets/Menu-Icons/sample.jpg" alt="" class="user-profile-picture">
                        </div>
                        <h3 class="user-profile-name"><?= $_SESSION["Name"] ?></h3>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M7,10L12,15L17,10H7Z" />
                        </svg>
                    </button>
                    <ul>
                        <h4>Profile</h4>
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
            </ul>
        </div>
    </div>
</header>