@extends('layouts.index')

@section('show')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                    <th scope="col">bank name</th>
                    <th scope="col">account number</th>
                    <th scope="col">ifsc code</th>
                    <th scope="col">city</th>
                    <th scope="col">stat</th>
                    <th scope="col">pin code</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($tabbedForms2 as $form)
  @php
  $field5Data = json_decode($form->tabbedForm2->field5,true);
@endphp

      <tr>
        <th scope="row">{{$form->id }}</th>
        <td> {{$form->field1  }}</td>
        <td>{{$form->field2 }}</td>
        <td>{{$form->field3  }}</td>

      </tr>
  @endforeach --}}
                @foreach ($tabbedForms2 as $form)
                    <tr>
                        <th scope="row">{{ $form->id }}</th>
                        <td>{{ $form->field1 }}</td>
                        <td>{{ $form->field2 }}</td>
                        <td>{{ $form->field3 }}</td>
                         <td>
                            @foreach ($form->tabbedForm2 as $tabbedForm)
                                {{-- Decode the JSON field5 --}}
                                @php
                                    $field5Data = json_decode($tabbedForm->field5, true);
                                @endphp
                                @foreach ($field5Data as  $key=>$value)
                                @if($key === 'field4')
                                    <h6> {{ $value }}</h6>
                                    @endif
                                @endforeach
                            @endforeach
                        </td>
                        <td>
                            @foreach ($form->tabbedForm2 as $tabbedForm)
                            {{-- Decode the JSON field5 --}}
                            @php
                                $field5Data = json_decode($tabbedForm->field5, true);
                            @endphp
                            @foreach ($field5Data as  $key=>$value)
                            @if($key === 'field5')
                                <h6> {{ $value }}</h6>
                                @endif
                            @endforeach
                        @endforeach
                        </td>
                        <td>
                            @foreach ($form->tabbedForm2 as $tabbedForm)
                            {{-- Decode the JSON field5 --}}
                            @php
                                $field5Data = json_decode($tabbedForm->field5, true);
                            @endphp
                            @foreach ($field5Data as  $key=>$value)
                            @if($key === 'field6')
                                <h6> {{ $value }}</h6>
                                @endif
                            @endforeach
                        @endforeach
                        </td>
                        <td>
                            @foreach ($form->tabbedForm2 as $tabbedForm)
                            {{-- Decode the JSON field5 --}}
                            @php
                                $field5Data = json_decode($tabbedForm->field5, true);
                            @endphp
                            @foreach ($field5Data as  $key=>$value)
                            @if($key === 'field7')
                                <h6>{{ $value }}</h6>
                                @endif
                            @endforeach
                        @endforeach
                        </td>
                        <td>
                            @foreach ($form->tabbedForm2 as $tabbedForm)
                            {{-- Decode the JSON field5 --}}
                            @php
                                $field5Data = json_decode($tabbedForm->field5, true);
                            @endphp
                            @foreach ($field5Data as  $key=>$value)
                            @if($key === 'field8')
                                <h6> {{ $value }}</h6>
                                @endif
                            @endforeach
                        @endforeach
                        </td>
                        <td>
                            @foreach ($form->tabbedForm2 as $tabbedForm)
                            {{-- Decode the JSON field5 --}}
                            @php
                                $field5Data = json_decode($tabbedForm->field5, true);
                            @endphp
                            @foreach ($field5Data as  $key=>$value)
                            @if($key === 'field9')
                                <h6> {{ $value }}</h6>
                                @endif
                            @endforeach
                        @endforeach
                        </td>
                        <td>
                            <a href="{{URL('edit/'.$form->id)}}"><i class="bi bi-pencil-square text-success"></i></a>
                            <a href="{{URL('delete/'.$form->id)}}" onclick="return confirm('are you sure to delet this data')"><i class="bi bi-trash text-danger"></i></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
@endsection
