function calculate() {
    // Get input values
    let amount = document.getElementById('amount').value;
    let percentage = document.getElementById('percentage').value;
    let resultDisplay = document.getElementById('result');
    let errorDisplay = document.getElementById('error');

    // Check if inputs are numbers
    if (isNaN(amount) || isNaN(percentage)) {
        // Display error message if inputs are not numbers
        errorDisplay.textContent = "Please enter a valid number";
        // Clear previous result
        resultDisplay.textContent = "...";
    } else {
        // Calculate savings amount
        let result = (parseFloat(amount) * parseFloat(percentage)) / 100;
        // Display result
        resultDisplay.textContent = result.toFixed(2); // Fixed to 2 decimal places
        // Clear previous error message
        errorDisplay.textContent = "";
    }
}
