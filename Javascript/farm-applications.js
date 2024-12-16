const table = document.getElementById("myTable");
table.addEventListener("click", async (event) => {
    if (event.target && event.target.matches(".Button-Green-Icon")) {
        const row = event.target.closest("tr");
        const hiddenInput = row.querySelector("input[type='hidden']");
        const id = hiddenInput.value;
        var result = await ShowPopup("Are you sure you want to verified?", PopupType.Prompt);
        if (result) {
            const response = await AJAXPostRequest(
                "/config/API/farms_update.php",
                {
                    "id": id,
                    "status": "verified",
                }
            )
            if (response.success) {
                ShowNotification("Verified Successfully", Colors.Green);
                row.remove();
            } else {
                console.log("Failed to update user:", response.message);
            }
        }
    }
    if (event.target && event.target.matches(".Button-Red-Icon")) {
        const row = event.target.closest("tr");
        const hiddenInput = row.querySelector("input[type='hidden']");
        const id = hiddenInput.value;
        var result = await ShowPopup("Are you sure you want to reject?", PopupType.Prompt);
        if (result) {
            const response = await AJAXPostRequest(
                "/config/API/farms_update.php",
                {
                    "id": id,
                    "status": "reject",
                }
            )
            if (response.success) {
                ShowNotification("Reject Successfully", Colors.Green);
                row.remove();
            } else {
                console.log("Failed to update user:", response.message);
            }
        }
    }
    if (event.target && event.target.matches(".Button-Purple-Icon")) {
        const row = event.target.closest("tr");
        console.log(row.querySelectorAll("input[type='hidden']")[1])
        const hiddenInput = row.querySelectorAll("input[type='hidden']")[0];
        const locationInput = row.querySelectorAll("input[type='hidden']")[1];
        const id = hiddenInput.value;
        const url = "https://www.google.com/maps/place/@" + locationInput.value + ", 17z";
        window.open(url);
    }
});

document.getElementById("SearchButton").addEventListener("click", async (e) => {
    e.preventDefault();
    ShowLoading();
    document.getElementById("table-body").innerHTML = "";
    await AdminUserRequest(document.getElementById("ContentSearch").value);
    HideLoading();
});