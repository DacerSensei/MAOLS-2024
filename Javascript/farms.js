const table = document.getElementById("myTable");
table.addEventListener("click", async (event) => {
    if (event.target && event.target.matches(".Button-Blue-Icon")) {
        const row = event.target.closest("tr");

        const hiddenInput = row.querySelectorAll("input[type='hidden']")[0];
        const locationInput = row.querySelectorAll("input[type='hidden']")[1];
        const farmIdInput = row.querySelectorAll("input[type='hidden']")[2];
        const farmNameInput = row.querySelectorAll("input[type='hidden']")[3];
        const id = hiddenInput.value;
        window.location.href = "http://localhost/pages/livestock.php?farm_id=" + farmIdInput.value + "&farm_name=" + farmNameInput.value;
    }
    if (event.target && event.target.matches(".Button-Red-Icon")) {
        const row = event.target.closest("tr");

        const hiddenInput = row.querySelector("input[type='hidden']");
        const id = hiddenInput.value;
        var result = await ShowPopup("Are you sure you want to delete?", PopupType.Prompt);
        if (result) {
            const response = await AJAXPostRequest(
                "/config/API/farms_delete.php",
                {
                    "id": id,
                }
            )
            if (response.success) {
                ShowNotification("Delete Successfully", Colors.Green);
                row.remove();
            } else {
                console.log("Failed to delete farm:", response.message);
            }
        }
    }
    if (event.target && event.target.matches(".Button-Green-Icon")) {
        const row = event.target.closest("tr");

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