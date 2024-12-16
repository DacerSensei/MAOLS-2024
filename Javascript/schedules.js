document.querySelector(".Calendar-Picker-Container .Calendar-Button").addEventListener("click", () => {
    calendarElement = document.querySelector(".Calendar-Picker-Container > :nth-child(2)");
    if (calendarElement.classList.contains("active")) {
        calendarElement.classList.remove("active");
    } else {
        calendarElement.classList.add("active");
    }
})

document.addEventListener("DOMContentLoaded", function () {
    const currentDate = new Date();
    const currentDay = currentDate.getDate();
    let currentMonth = currentDate.getMonth(); // 0-11 (0 = January)
    let currentYear = currentDate.getFullYear();

    const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    const daysOfWeek = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

    const monthYearDisplay = document.querySelector(".Calendar-Picker-Container .Calendar-Current-Month-Year");
    const currentDayDisplay = document.querySelector(".Calendar-Picker-Container .Calendar-Picker-Header > p");
    const calendarBody = document.querySelector(".Calendar-Picker-Container .Calendar-Picker-Body");


    document.querySelector(".Calendar-Picker-Container .Calendar-Picker-Month-Container > span > :nth-child(1)").addEventListener("click", () => {
        currentMonth--;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }
        RenderCalendar();
    });

    document.querySelector(".Calendar-Picker-Container .Calendar-Picker-Month-Container > span > :nth-child(2)").addEventListener("click", () => {
        currentMonth++;
        if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }
        RenderCalendar();
    });

    function RenderCalendar() {
        currentDayDisplay.textContent = new Intl.DateTimeFormat('en-US', {
            weekday: 'long',
            month: 'long',
            day: 'numeric'
        }).format(currentDate);
        monthYearDisplay.textContent = `${monthNames[currentMonth]} ${currentYear}`;

        calendarBody.innerHTML = "";

        const firstDay = new Date(currentYear, currentMonth, 1).getDay();
        const numDaysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();

        for (let i = 0; i < 7; i++) {
            const dayHeader = document.createElement("div");
            const dayHeaderSpan = document.createElement("span");
            dayHeader.className = "day-name";
            dayHeaderSpan.textContent = daysOfWeek[i];
            dayHeader.appendChild(dayHeaderSpan);
            calendarBody.appendChild(dayHeader);

        }

        // Create empty spaces before the first day of the month
        for (let i = 0; i < firstDay; i++) {
            const emptySpace = document.createElement("div");
            emptySpace.className = "day-empty";
            calendarBody.appendChild(emptySpace);
        }

        // Create the days of the month
        for (let day = 1; day <= numDaysInMonth; day++) {
            const dayElement = document.createElement("div");
            const daySpan = document.createElement("span");
            dayElement.className = "day";
            dayElement.setAttribute('data-day', day);
            dayElement.setAttribute('data-month', currentMonth);
            dayElement.setAttribute('data-year', currentYear);

            daySpan.textContent = day;
            const inputDate = document.createElement("input");
            inputDate.type = "hidden"
            inputDate.value = "current"
            if (day == currentDay && currentMonth == currentDate.getMonth()) {
                dayElement.classList.add("today");
            }
            dayElement.appendChild(daySpan);

            dayElement.addEventListener('click', async () => {
                const clickedDay = dayElement.getAttribute('data-day');
                const clickedMonth = dayElement.getAttribute('data-month');
                const clickedYear = dayElement.getAttribute('data-year');

                const clickedDate = new Date(clickedYear, clickedMonth, clickedDay);
                const formattedDate = clickedDate.toLocaleDateString('en-CA');

                const form = document.createElement('form');
                form.method = "GET";
                form.action = window.location.href;

                const booleanInput = document.createElement('input');
                booleanInput.type = 'hidden';
                booleanInput.name = "date";
                booleanInput.value = formattedDate;
                form.appendChild(booleanInput);
                document.body.appendChild(form);
                form.submit();
            });

            calendarBody.appendChild(dayElement);
        }
    }
    RenderCalendar();
});

document.getElementById("today-button").addEventListener('click', function () {
    location.replace(location.pathname);
});

document.getElementById("tomorrow-button").addEventListener('click', function () {
    const form = document.createElement('form');
    form.method = "GET";
    form.action = window.location.href;

    const booleanInput = document.createElement('input');
    booleanInput.type = 'hidden';
    booleanInput.name = "tomorrow";
    booleanInput.value = true;
    form.appendChild(booleanInput);
    document.body.appendChild(form);
    form.submit();
});

function toggleExpander(event) {
    if (event.target.parentNode) {
        event.target.parentNode.parentNode.classList.toggle('active');
    }
}