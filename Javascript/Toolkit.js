const Colors = {
    Green: "#00d25b",
    Yellow: "#ffab00",
    Blue: "#0090e7",
    Red: "#fc424a",
    Purple: "#8f5fe8",
    Pink: "#f72585",
    Black: "#000000",
    White: "#FFFFFF",
    Ash: "#d5dee1",
    BorderColor: getComputedStyle(document.documentElement).getPropertyValue('--color-border'),
    PrimaryColor: getComputedStyle(document.documentElement).getPropertyValue('--color-primary')
}


async function AJAXPostRequest(pathToSend, jsonToSend) {
    const response = await fetch(pathToSend, {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify(jsonToSend)
    });
    return response.json()
}

async function AJAXGetRequest(pathToSend) {
    const response = await fetch(pathToSend, {
        method: "GET",
        headers: {
            "Content-Type": "application/json",
        },
    });
    return response.json()
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

function SetTab() {
    // Get all the tab containers
    var tabContainers = document.querySelectorAll('.tab-container');

    // Loop through each tab container
    for (let i = 0; i < tabContainers.length; i++) {
        const container = tabContainers[i];
        // Get all the tab buttons and content for this container
        const tabButtons = container.querySelectorAll('.tab-button');
        const tabPanels = container.querySelectorAll('.tab-panel');

        // Add click event listener to each tab button
        for (let j = 0; j < tabButtons.length; j++) {
            const button = tabButtons[j];
            button.addEventListener('click', () => {
                // Remove active class from all tab buttons and panels
                for (let k = 0; k < tabButtons.length; k++) {
                    tabButtons[k].classList.remove('active');
                    tabPanels[k].classList.remove('active');
                }

                // Add active class to clicked tab button and panel
                const tab = button.dataset.tab;
                document.getElementById(tab).classList.add('active');
                button.classList.add('active');
            });
        }
    }
}

function SetErrorFocus(object) {
    Element.prototype.documentOffsetTop = function () {
        return this.offsetTop + (this.offsetParent ? this.offsetParent.documentOffsetTop() : 0);
    };

    var top = object.documentOffsetTop() - (window.innerHeight / 2);
    window.scrollTo(0, top);
    object.focus();

    var currentBorder = object.style.border;
    object.style.outline = '2px solid #da373c';
    setTimeout(() => {
        object.style.outline = currentBorder;
    }, 2000);
}

function GetValidDate() {
    return new Promise(function (resolve, reject) {
        const xhr = new XMLHttpRequest();
        xhr.open('GET', "/MWSSS-Application/PHP-API/GetValidDate.php", true);
        xhr.onload = function () {
            if (xhr.status === 200) {
                if (xhr.responseText == "Something went wrong") {
                    resolve("Something went wrong");
                } else {
                    resolve(xhr.responseText);
                }
            } else {
                reject('Something went wrong');
            }
        };
        xhr.send();
    });
}

const chooseFileButtons = document.querySelectorAll(".Burger-File");
chooseFileButtons.forEach((button) => {
    button.addEventListener("change", (event) => {
        button.getElementsByTagName("label")[0].textContent = event.target.files[0].name; // Get the selected file
    });
});

function ValidateDate(event) {
    const inputTextbox = event.target;
    const input = event.target.value;
    const pattern = /^(0[1-9]|1[0-2])\/(0[1-9]|[12][0-9]|3[01])\/\d{4}$/;

    if (pattern.test(input)) {
        inputTextbox.setAttribute("validDate", "");
        inputTextbox.style.outline = "";
    } else {
        inputTextbox.removeAttribute("validDate");
        inputTextbox.style.outline = '2px solid #da373c';
    }
}

function DisableButton(id) {
    const button = document.getElementById(id);
    button.style.backgroundColor = Colors.Ash;
    button.style.color = Colors.Black;
    button.style.cursor = "context-menu";
    button.disabled = true;
}

function EnableButton(id, backgroundColor = Colors.Green, color = Colors.White) {
    const button = document.getElementById(id);
    button.style.backgroundColor = backgroundColor;
    button.style.color = color;
    button.style.cursor = "pointer";
    button.disabled = false;
}

function HideElement(id) {
    const element = document.getElementById(id);
    element.style.display = "none";
}

function ShowBlockElement(id) {
    const element = document.getElementById(id);
    element.style.display = "block";
}

// Sample how to use
// ShowPopup('Do you want to proceed?').then((result) => {
//     if (result) {
//         console.log('User clicked Yes');
//     } else {
//         console.log('User clicked No');
//     }
// });


//   Html

var modalButtons = document.querySelectorAll('.modal-trigger');
var modals = document.querySelectorAll('.modal-container');
for (var i = 0; i < modalButtons.length; i++) {
    modalButtons[i].addEventListener('click', function () {
        var modalId = this.dataset.target;
        var modal = document.getElementById(modalId);
        modal.style.display = 'flex';

        // When the user clicks on the close button, close the modal
        var closeBtn = modal.querySelector('.modal-close');
        closeBtn.addEventListener('click', function () {
            modal.style.display = 'none';
        });

        // When the user clicks anywhere outside of the modal, close the modal
        // window.addEventListener('click', function(event) {
        //     if (event.target == modal) {
        //         modal.style.display = 'none';
        //     }
        // });
    });
}

// Custom Picker || Selected
/* Example of how to use the custom picker
<picker-component id="gender">
    <picker-pick-component></picker-pick-component>
    <picker-item-container-component>
        <picker-item-component value="None">Select Gender</picker-item-component>
        <picker-item-component value="Male">Male</picker-item-component>
        <picker-item-component value="Female">Female</picker-item-component>
    </picker-item-container-component>
</picker-component> 

// To get the value of selected
document.getElementById("gender").Value 

// To set the selected item programmatically
document.getElementById("gender").SelectedItem = document.getElementById("gender").Items[1] 

// To get the SelectedElement of picker
document.getElementById("gender").SelectedItem
*/
class PickerItem extends HTMLElement {
    constructor() {
        super();
        this.value = this.getAttribute("value");
    }
    connectedCallback() {
        this.addEventListener('click', () => {
            const picker = this.closest("picker-component");
            picker.removeAttribute("open");
            picker.selectItem(this);
        });
    }
}
customElements.define("picker-item-component", PickerItem);

class PickedItem extends HTMLElement {
    constructor() {
        super();
        this.Picked = "";
    }
    connectedCallback() {
        this.textContent = this.Picked;
    }
}
customElements.define("picker-pick-component", PickedItem);


class PickerItemContainer extends HTMLElement {
    constructor() {
        super();
    }
}
customElements.define("picker-item-container-component", PickerItemContainer);

class Picker extends HTMLElement {
    constructor() {
        super();
        this.Items = [];
        this._selectedItem = null;
        this.IsOpen = false;
    }

    get SelectedItem() {
        return this._selectedItem;
    }

    set SelectedItem(Item) {
        if (this._selectedItem !== Item) {
            this._selectedItem = Item;
            this.SelectedItemChanged();
        }
    }

    get Value() {
        return this._selectedItem ? this._selectedItem.getAttribute("value") : null;
    }

    SelectedItemChanged() {
        if (this._selectedItem) {
            if (this._selectedItem.getAttribute("value").toLowerCase() == "None".toLowerCase()) {
                this.querySelector("picker-pick-component").style.color = "#757575";
            } else {
                this.querySelector("picker-pick-component").style.color = "black";
            }
            this.querySelector("picker-pick-component").textContent = this._selectedItem.textContent
            this._selectedItem.setAttribute("selected", "");

            this.dispatchEvent(new CustomEvent("change", {
                bubbles: true,
                detail: {
                    value: this._selectedItem.getAttribute("value"),
                    text: this._selectedItem.textContent
                }
            }));
        }
    }

    togglePicker() {
        this.IsOpen ? this.closePicker() : this.openPicker();
    }

    openPicker() {
        this.IsOpen = true;
        this.setAttribute("open", "");
        document.addEventListener('click', this.clickOutsideHandler);
    }

    closePicker() {
        this.IsOpen = false;
        this.removeAttribute("open");
        document.removeEventListener('click', this.clickOutsideHandler);
    }

    clickOutsideHandler = (event) => {
        if (!this.contains(event.target)) {
            this.closePicker();
        }
    };

    connectedCallback() {
        this.addEventListener("click", () => {
            this.togglePicker();
        })

        this.Items = Array.from(this.querySelectorAll("picker-item-component"));
        if (this.Items.length > 0) {
            this.selectItem(this.Items[0]);
        }
    }

    selectItem(item) {
        if (this.SelectedItem) {
            this.SelectedItem.removeAttribute("selected");
        }

        this.SelectedItem = item;
    }
}
customElements.define("picker-component", Picker);
// End Custom Picker

// document.addEventListener("DOMContentLoaded", function () {
//     const currentDate = new Date();
//     let currentMonth = currentDate.getMonth(); // 0-11 (0 = January)
//     let currentYear = currentDate.getFullYear();

//     const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
//     const daysOfWeek = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

//     const monthYearDisplay = document.querySelector(".Calendar-Picker-Container .Calendar-Current-Month-Year");
//     const calendarBody = document.querySelector(".Calendar-Picker-Container .Calendar-Picker-Body");

//     document.querySelector(".Calendar-Picker-Container .Calendar-Picker-Month-Container > span > :nth-child(1)").addEventListener("click", () => {
//         currentMonth--;
//         if (currentMonth < 0) {
//             currentMonth = 11;
//             currentYear--;
//         }
//         RenderCalendar();
//     });

//     document.querySelector(".Calendar-Picker-Container .Calendar-Picker-Month-Container > span > :nth-child(2)").addEventListener("click", () => {
//         currentMonth++;
//         if (currentMonth > 11) {
//             currentMonth = 0;
//             currentYear++;
//         }
//         RenderCalendar();
//     });

//     function RenderCalendar() {
//         monthYearDisplay.textContent = `${monthNames[currentMonth]} ${currentYear}`;

//         calendarBody.innerHTML = "";

//         const firstDay = new Date(currentYear, currentMonth, 1).getDay();
//         const numDaysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();

//         for (let i = 0; i < 7; i++) {
//             const dayHeader = document.createElement("div");
//             dayHeader.className = "day";
//             dayHeader.textContent = daysOfWeek[i];
//             calendarBody.appendChild(dayHeader);
//         }

//         // Create empty spaces before the first day of the month
//         for (let i = 0; i < firstDay; i++) {
//             const emptySpace = document.createElement("div");
//             emptySpace.className = "day empty";
//             calendarBody.appendChild(emptySpace);
//         }

//         // Create the days of the month
//         for (let day = 1; day <= numDaysInMonth; day++) {
//             const dayElement = document.createElement("div");
//             dayElement.className = "day";
//             dayElement.textContent = day;
//             calendarBody.appendChild(dayElement);
//         }
//     }
//     RenderCalendar();
// });