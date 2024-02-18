
    @extends("layouts.index")


    @section("tabb2")
    <style>
        .tabcontent {
            display: none;
        }

        .tablinks {
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            padding: 10px;
            cursor: pointer;
        }

        .topright {
            float: right;
            cursor: pointer;
        }
    </style>
</head>
<body>


<div class="tab">
    <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">London</button>
    <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
    <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
</div>

<form id="tabbedForm"  method="post">
    @csrf
    <div id="London" class="tabcontent">
        <span onclick="closeTab(event)" class="topright">&times;</span>
        <h3>London</h3>
        <!-- Your Form Fields for London -->
        <label for="field1">Field 1:</label>
        <input type="text" id="field1" name="field1" required>

        <label for="field2">Field 2:</label>
        <input type="text" id="field2" name="field2" required>

        <label for="field3">Field 3:</label>
        <input type="text" id="field3" name="field3" required>

        <button type="button" onclick="nextTab(event, 'Paris')">Next</button>
    </div>

    <div id="Paris" class="tabcontent">
        <span onclick="closeTab(event)" class="topright">&times;</span>
        <h3>Paris</h3>
        <!-- Your Form Fields for Paris -->
        <label for="fieldj4">Field 4:</label>
        <input type="text" id="fieldj4" name="fieldj4" required>

        <label for="fieldj5">Field 5:</label>
        <input type="text" id="fieldj5" name="fieldj5" required>

        <label for="field6">Field 6:</label>
        <input type="text" id="field6" name="field6" required>

        <button type="button" onclick="nextTab(event, 'Tokyo')">Next</button>
    </div>

    <div id="Tokyo" class="tabcontent">
        <span onclick="closeTab(event)" class="topright">&times;</span>
        <h3>Tokyo</h3>
        <!-- Your Form Fields for Tokyo -->
        <label for="field7">Field 7:</label>
        <input type="text" id="field7" name="field7" required>

        <label for="field8">Field 8:</label>
        <input type="text" id="field8" name="field8" required>

        <label for="field9">Field 9:</label>
        <input type="text" id="field9" name="field9" required>

        <button type="submit">Submit</button>
    </div>
</form>

<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    function closeTab(evt) {
        evt.target.parentElement.style.display = "none";
    }

    function nextTab(evt, nextCity) {
        openCity(evt, nextCity);
    }

    // Get the element with id="defaultOpen" and click on it
    // document.getElementById("defaultOpen").click();
</script>
@endsection
