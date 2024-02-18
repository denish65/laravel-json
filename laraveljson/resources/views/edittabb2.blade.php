@extends('layouts.index')


@section('tabb2')
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
    @foreach ($editdata->tabbedForm2 as $item)
        @php
            $tabb2from = json_decode($item->field5);

            $field4 = "null";
            $field5 = "null";
            // $field6 = "null";
            // $field7 = "null";
            // $field8 = "null";
            // $field9 = "null";
        @endphp
        @foreach ($tabb2from as $key => $data)
            @if ($key === 'fieldj4')
                @php echo $fieldj4 = $data; @endphp
             @else
               @php $fieldj4 = "null";  @endphp
            @endif

            @if ($key === 'fieldj5')
                @php echo $fieldj5 = $data @endphp
             @else
              @php  $fieldj5 = "null";  @endphp
            @endif

            @if ($key === 'field6')
              @php $field6 = $data @endphp
             @else
              @php $field6 = "null" @endphp
            @endif

            @if ($key === 'field7')
                @php $field7 = $data @endphp
             @else
              @php $field7 = null @endphp
            @endif

            @if ($key === 'field8')
                @php $field8 = $data @endphp
             @else
              @php $field8 = "null" @endphp
            @endif

            @if ($key === 'field9')
                @php $field9 = $data @endphp
            @endif
        @endforeach
    @endforeach

    <body>


        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">London</button>
            <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
            <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
            {{$editdata->id}}
        </div>

        <form id="tabbedForm" method="post" action="{{ URL('update/'.$editdata->id)}}">
            @csrf
            <div id="London" class="tabcontent">
                <span onclick="closeTab(event)" class="topright">&times;</span>
                <h3>London</h3>
                <!-- Your Form Fields for London -->
                <label for="field1">Field 1:</label>
                <input type="text" id="field1" name="field1" value="{{ $editdata->field1 }}" required>

                <label for="field2">Field 2:</label>
                <input type="text" id="field2" name="field2" value="{{ $editdata->field2 }}" required>

                <label for="field3">Field 3:</label>
                <input type="text" id="field3" name="field3" value="{{ $editdata->field3 }}" required>

                <button type="button" onclick="nextTab(event, 'Paris')">Next</button>
            </div>

            <div id="Paris" class="tabcontent">
                <span onclick="closeTab(event)" class="topright">&times;</span>
                <h3>Paris</h3>
                <!-- Your Form Fields for Paris -->
                <label for="field4">Field 4:</label>
                <input type="text" id="fieldj4" name="fieldj4" value="{{ $fieldj4 }}" required>

                <label for="field5">Field 5:</label>
                <input type="text" id="fieldj5" name="fieldj5" value="{{ $fieldj5 }}" required>

                <label for="field6">Field 6:</label>
                <input type="text" id="field6" name="field6" value="{{ $field6 }}" required>

                <button type="button" onclick="nextTab(event, 'Tokyo')">Next</button>
            </div>

            <div id="Tokyo" class="tabcontent">
                <span onclick="closeTab(event)" class="topright">&times;</span>
                <h3>Tokyo</h3>
                <!-- Your Form Fields for Tokyo -->
                <label for="field7">Field 7:</label>
                <input type="text" id="field7" name="field7" value="{{ $field7 }}" required>

                <label for="field8">Field 8:</label>
                <input type="text" id="field8" name="field8" value="{{ $field8 }}" required>

                <label for="field9">Field 9:</label>
                <input type="text" id="field9" name="field9" value="{{ $field9 }}" required>

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

        <div>
            {{-- @foreach ($editdata->tabbedForm2 as $item)
                @php
                    $tabb2from = json_decode($item->field5);
                @endphp
                @foreach ($tabb2from as $key => $data)
                @if ($key === 'field4')
                {{$key}}:{{ $data }}
                @endif
                @endforeach
            @endforeach --}}

            {{-- @foreach ($tabb2from as $item)
          {{print_r($item)}}
        @endforeach --}}


            {{-- {{print_r($tabb2from)}} --}}
        </div>
    @endsection
