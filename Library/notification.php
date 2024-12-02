<div id="Notification-Bar"></div>
<div id="Popup">
    <div class="Popup-Content">
        <p id="Popup-Question"></p>
        <input type="text" id="Popup-Input" class="Textbox-Control fill">
        <div class="Popup-Buttons">
            <button id="Popup-Yes" class="Button-Green">Yes</button>
            <button id="Popup-No" class="Button-Ash-Outline">No</button>
        </div>
    </div>
</div>
<script>
    const PopupType = {
        Alert: true,
        Prompt: false,
    }

    function ShowNotification(text, backgroundColor, textColor = Colors.White) {
        const notificationBar = document.getElementById("Notification-Bar");
        if (notificationBar) {
            notificationBar.textContent = text;
            notificationBar.style.color = textColor;
            notificationBar.style.display = "block";
            notificationBar.style.backgroundColor = backgroundColor;
            setTimeout(() => {
                notificationBar.style.display = "none";
            }, 3000);
        }
    }

    function ShowPopup(Message, Type = PopupType.Alert, Placeholder) {
        return new Promise((resolve) => {
            const popup = document.getElementById('Popup');
            const popupQuestion = document.getElementById('Popup-Question');
            const popupInput = document.getElementById('Popup-Input');
            const popupYes = document.getElementById('Popup-Yes');
            const popupNo = document.getElementById('Popup-No');

            popupQuestion.textContent = Message;

            if (Placeholder) {
                popupInput.placeholder = Placeholder;
                popupInput.style.display = "block";
            } else {
                popupInput.style.display = "none";
            }

            popupYes.onclick = () => {
                popup.style.display = 'none';
                resolve(true);
            };

            popupNo.onclick = () => {
                popup.style.display = 'none';
                resolve(false);
            };
            if (Type) {
                popupYes.textContent = "Ok";
                popupNo.style.display = "none";
            } else {
                popupYes.textContent = "Yes";
                popupNo.style.display = "flex";
            }
            popup.style.display = 'flex';
        });
    }
</script>