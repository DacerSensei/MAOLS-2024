document.getElementById("announcement-form").addEventListener("submit", async (e) => {
    e.preventDefault();
    const title = document.getElementById("announcement-title").value ?? "";
    const body = document.getElementById("announcement-body").value ?? "";
    const description = document.getElementById("announcement-description").value ?? "";
    ShowLoading();

    const data = {
        "title": title,
        "body": body,
        "description": description,
    };

    console.log(data)

    const response = await AJAXPostRequest("/config/API/announcement_create.php", data)
    if (response.success) {
        ShowPopup("You just created a new announcement");
    } else {
        console.log("Failed to update user:", response.message);
    }
    HideLoading();
    document.getElementById("announcement-form").reset();
    document.querySelector('.modal-close').click();
});

const table = document.getElementById("myTable");
table.addEventListener("click", async (event) => {
    if (event.target && event.target.matches(".Button-Red-Icon")) {
        const row = event.target.closest("tr");

        const hiddenInput = row.querySelector("input[type='hidden']");
        const id = hiddenInput.value;
        var result = await ShowPopup("Are you sure you want to delete?", PopupType.Prompt);
        if (result) {
            const response = await AJAXPostRequest(
                "/config/API/announcement_delete.php",
                {
                    "id": id
                }
            )
            if (response.success) {
                ShowNotification("Deleted Successfully", Colors.Green);
                row.remove();
            } else {
                console.log("Failed to delete:", response.message);
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