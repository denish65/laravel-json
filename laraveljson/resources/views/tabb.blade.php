<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabbed Form</title>

    <style>
        /* Style to hide all fieldsets except the first one */
        fieldset:not(:first-of-type) {
            display: none;
        }
    </style>
</head>
<body>

<form id="tabbedForm" action="#" method="post">
    <!-- Tab 1 -->
    <fieldset>
        <legend>Tab 1</legend>

        <label for="field1">Field 1:</label>
        <input type="text" id="field1" name="field1" required>

        <label for="field2">Field 2:</label>
        <input type="text" id="field2" name="field2" required>

        <!-- Next button to move to the next tab -->
        <button type="button" onclick="nextTab(1)">Next</button>
    </fieldset>

    <!-- Tab 2 -->
    <fieldset>
        <legend>Tab 2</legend>

        <label for="field3">Field 3:</label>
        <input type="text" id="field3" name="field3" required>

        <label for="field4">Field 4:</label>
        <input type="text" id="field4" name="field4" required>

        <!-- Previous and Next buttons to navigate between tabs -->
        <button type="button" onclick="prevTab(1)">Previous</button>
        <button type="button" onclick="nextTab(2)">Next</button>
    </fieldset>

    <!-- Tab 3 -->
    <fieldset>
        <legend>Tab 3</legend>

        <label for="field5">Field 5:</label>
        <input type="text" id="field5" name="field5" required>

        <label for="field6">Field 6:</label>
        <input type="text" id="field6" name="field6" required>

        <!-- Previous and Submit buttons to navigate and submit the form -->
        <button type="button" onclick="prevTab(2)">Previous</button>
        <button type="submit">Submit</button>
    </fieldset>
</form>

<script>
    function showTab(n) {
        // Show the tab at the specified index
        document.querySelectorAll('fieldset').forEach((fieldset, index) => {
            fieldset.style.display = (index === n) ? 'block' : 'none';
        });
    }

    function nextTab(n) {
        // Hide the current tab and show the next one
        showTab(n);
    }

    function prevTab(n) {
        // Hide the current tab and show the previous one
        showTab(n);
    }
</script>

</body>
</html>
