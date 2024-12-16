document.addEventListener("DOMContentLoaded", async function () {
    try {
        const response = await AJAXPostRequest("/config/API/users_get_all.php");
        const livestock_response = await AJAXPostRequest("/config/API/livestock_get_all.php");

        if (response.success) {
            const data = response.data;
            const groupedData = data.reduce((acc, user) => {
                const type = user.type;
                if (acc[type]) {
                    acc[type] += 1;
                } else {
                    acc[type] = 1;
                }
                return acc;
            }, {});
            const chartLabels = Object.keys(groupedData);
            const chartData = Object.values(groupedData);

            new Chart(document.getElementById("user-type-chart").getContext("2d"), {
                type: 'polarArea',  // Type of chart
                data: {
                    labels: chartLabels, // Types as labels
                    datasets: [
                        {
                            label: 'User Types',  // Label for the chart
                            data: chartData,      // Counts for each type
                            min: 0,
                            max: 100,
                            backgroundColor: [
                                'rgb(255, 99, 132)',
                                'rgb(75, 192, 192)',
                                'rgb(255, 205, 86)',
                                'rgb(201, 203, 207)',
                                'rgb(54, 162, 235)'
                            ]
                        }
                    ]
                },
                options: {
                    plugins: {},
                    // responsive: true,
                    aspectRatio: 2,
                    animations: {
                        tension: {
                            duration: 1000,
                            easing: 'linear',
                            from: 1,
                            to: 0,
                            loop: true
                        }
                    }
                }
            });


        } else {
            console.log("Failed to fetch data:", response.message);
        }

        if (livestock_response.success) {
            const data = livestock_response.data;
            const groupedData = data.reduce((acc, user) => {
                const type = user.type_name;
                if (acc[type]) {
                    acc[type] += 1;
                } else {
                    acc[type] = 1;
                }
                return acc;
            }, {});
            const chartLabels = Object.keys(groupedData);
            const chartData = Object.values(groupedData);
            new Chart(document.getElementById("livestock-chart").getContext("2d"), {
                type: 'polarArea',  // Type of chart
                data: {
                    labels: chartLabels, // Types as labels
                    datasets: [
                        {
                            label: 'User Types',  // Label for the chart
                            data: chartData,      // Counts for each type
                            min: 0,
                            max: 100,
                            backgroundColor: [
                                'rgb(255, 99, 132)',
                                'rgb(75, 192, 192)',
                                'rgb(255, 205, 86)',
                                'rgb(201, 203, 207)',
                                'rgb(54, 162, 235)'
                            ]
                        }
                    ]
                },
                options: {
                    plugins: {},
                    // responsive: true,
                    aspectRatio: 1,
                    animations: {
                        tension: {
                            duration: 1000,
                            easing: 'linear',
                            from: 1,
                            to: 0,
                            loop: true
                        }
                    }
                }
            });
        } else {
            console.log("Failed to fetch data:", response.message);
        }
    } catch (error) {
        console.log("Error occurred during the API request:", error);
    }
});