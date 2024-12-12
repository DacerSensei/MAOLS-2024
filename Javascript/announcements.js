const table = document.getElementById("myTable");
table.addEventListener("click", async (event) => {
    if (event.target && event.target.matches(".Button-Red-Icon")) {
        const row = event.target.closest("tr");

        const hiddenInput = row.querySelector("input[type='hidden']");
        const id = hiddenInput.value;
        var result = await ShowPopup("Are you sure you want to delete?", PopupType.Prompt);
        if (result) {
            const response = await AJAXPostRequest(
                "/config/API/user_update.php",
                {
                    "id": id,
                    "status": "reject",
                }
            )
            if (response.success) {
                ShowNotification("Reject Successfully", Colors.Green);
                row.remove();
            } else {
                console.log("Failed to update:", response.message);
            }
        }
    }
});

document.getElementById("SearchButton").addEventListener("click", async (e) => {
    e.preventDefault();
    ShowLoading();
    document.getElementById("table-body").innerHTML = "";
    await AdminUserRequest(document.getElementById("ContentSearch").value);
    HideLoading();
});