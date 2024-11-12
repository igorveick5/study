function generateRandomDate(startDate, endDate) {
    let start = new Date(startDate);
    let end = new Date(endDate);
    let randomDate = new Date(start.getTime() + Math.random() * (end.getTime() - start.getTime()));
    return randomDate.toLocaleDateString();
}

// Set random date for each image
document.querySelectorAll('.random-date').forEach(function(dateElement) {
    let randomDate = generateRandomDate('2020-01-01', '2024-01-01'); 
    dateElement.textContent = randomDate;
});