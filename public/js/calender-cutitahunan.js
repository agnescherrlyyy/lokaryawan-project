document.addEventListener("DOMContentLoaded", function () {
    const currentDate = new Date();
    const selectedDates = [];

    const calendar = document.getElementById("calendar");
    const currentMonthElement = document.getElementById("current-month");
    const selectedDateElement = document.getElementById("selected-date-value");
    const prevMonthButton = document.getElementById("prev-month");
    var dateWeek = new Date();
    dateWeek.setDate(dateWeek.getDate() + 6);

    const options = {
        weekday: "long",
        year: "numeric",
        month: "long",
        day: "numeric",
    };

    function updatePrevMonthButton() {
        const today = new Date();
        const isCurrentMonth =
            currentDate.getFullYear() === today.getFullYear() &&
            currentDate.getMonth() === today.getMonth();

        prevMonthButton.disabled = isCurrentMonth;

        oneWeekFromNow = new Date(currentDate);
        oneWeekFromNow.setDate(oneWeekFromNow.getDate() + 7);
    }

    updatePrevMonthButton();

    prevMonthButton.addEventListener("click", function () {
        currentDate.setMonth(currentDate.getMonth() - 1);

        calendar.innerHTML = "";
        renderCalendar();
        updatePrevMonthButton();
    });

    document
        .getElementById("next-month")
        .addEventListener("click", function () {
            if (currentDate.getDate() > 25) {
                currentDate.setDate(currentDate.getDate() + 6);
            }else{
                currentDate.setMonth(currentDate.getMonth() + 1);
            }
            calendar.innerHTML = "";
            renderCalendar();
            updatePrevMonthButton();
        });

    calendar.addEventListener("click", function (event) {
        if (
            event.target.classList.contains("calendar-day") &&
            !event.target.classList.contains("disabled")
        ) {
            

            const encryptedSisaCuti = localStorage.getItem('encryptedSisaCuti');
            const decryptedBytesSisaCuti = CryptoJS.AES.decrypt(encryptedSisaCuti, 'base64:3nMewpgVZ67OrYpN+7In1VnRAk8N99/s8yVvgCw9eCQ=');
            const decryptedSisaCuti = JSON.parse(decryptedBytesSisaCuti.toString(CryptoJS.enc.Utf8));

            const sisaCuti = parseInt(decryptedSisaCuti, 10);

            const clickedDate = new Date(
                currentDate.getFullYear(),
                currentDate.getMonth(),
                parseInt(event.target.textContent, 10)
            );

            const index = selectedDates.findIndex(
                (date) => date.getTime() === clickedDate.getTime()
            );

            if (index !== -1) {
                selectedDates.splice(index, 1);
                event.target.classList.remove("selected");
            } else {
                if (selectedDates.length < sisaCuti) {
                    selectedDates.push(clickedDate);
                    selectedDates.sort((a, b) => a.getTime() - b.getTime());
                    event.target.classList.add("selected");
                } else {
                    return;
                }
            }

            const formattedDates = selectedDates.map((date) =>
                date.toLocaleDateString("id-ID", options)
            );

            let selectedText = "";
            if (formattedDates.length > 1) {
                const startDate = formattedDates[0];
                const endDate = formattedDates[formattedDates.length - 1];
                selectedText = `${startDate} s/d ${endDate}`;
            } else {
                selectedText = formattedDates[0];
            }

            selectedDateElement.textContent = selectedText;

            const formattedDatesISO = selectedDates.map((date) => {
                const year = date.getFullYear();
                const month = (date.getMonth() + 1).toString().padStart(2, "0");
                const day = date.getDate().toString().padStart(2, "0");
                return `${year}-${month}-${day}`;
            });

            const encryptedSelectedDates = CryptoJS.AES.encrypt(JSON.stringify(formattedDatesISO), 'base64:3nMewpgVZ67OrYpN+7In1VnRAk8N99/s8yVvgCw9eCQ=').toString();
            localStorage.setItem('encryptedSelectedDates', encryptedSelectedDates);
            // console.log(selectedDates);
            // console.log(formattedDates);
        }
    });

    function renderCalendar() {
        const today = new Date();

        oneWeekFromNow = new Date(currentDate);
        oneWeekFromNow.setDate(oneWeekFromNow.getDate() + 7);

        currentMonthElement.textContent = currentDate.toLocaleDateString(
            "id-ID",
            { year: "numeric", month: "long" }
        );

        const firstDay = new Date(
            currentDate.getFullYear(),
            currentDate.getMonth(),
            1
        );
        const firstDayIndex = firstDay.getDay();

        const lastDay = new Date(
            currentDate.getFullYear(),
            currentDate.getMonth() + 1,
            0
        );
        const daysInMonth = lastDay.getDate();

        const weekdays = ["M", "S", "S", "R", "K", "J", "S"];

        for (let i = 0; i < 7; i++) {
            const dayElement = document.createElement("div");
            dayElement.classList.add("calendar-day", "day-name", "disabled");
            dayElement.textContent = weekdays[i];
            calendar.appendChild(dayElement);
        }

        for (let i = 0; i < firstDayIndex; i++) {
            const dayElement = document.createElement("div");
            dayElement.classList.add("calendar-day", "empty", "disabled");
            calendar.appendChild(dayElement);
        }

        for (let i = 1; i <= daysInMonth; i++) {
            const dayElement = document.createElement("div");
            dayElement.classList.add("calendar-day");
            dayElement.textContent = i;

            if (
                selectedDates.some(
                    (date) =>
                        date.getDate() === i &&
                        date.getMonth() === currentDate.getMonth()
                )
            ) {
                dayElement.classList.add("selected");
            }

            var date_select = new Date((currentDate.getMonth()+1)+"/"+i+"/"+currentDate.getFullYear());
            if (date_select < dateWeek)
            {
                dayElement.classList.add("disabled");
            }
            
            if (
                currentDate.getFullYear() === today.getFullYear() &&
                currentDate.getMonth() === today.getMonth() &&
                i === today.getDate()
            ) {
                dayElement.classList.add("today");
            }

            calendar.appendChild(dayElement);
        }

        const remainingDays = 42 - (firstDayIndex + daysInMonth);
        for (let i = 1; i <= remainingDays; i++) {
            const dayElement = document.createElement("div");
            dayElement.classList.add("calendar-day", "empty", "disabled");
            calendar.appendChild(dayElement);
        }
    }

    renderCalendar();
});
