@extends('index')

@section('content')
    <div class="row" style="padding-bottom: 0px;">      
        <div class="col s12" style="padding: 0px;">
            <div class="row" style="padding-bottom: 0px;">                  
                <div class="col s12" style="padding-bottom: 0px;">
                    <div class="collapsible-header white-text" style="background-color: #16A2E7FF; margin-top: 9px;"><i class="material-icons white-text">bookmark</i>SURVEY</div>
                    <div class="card-panel">
                        <div class="hidden-scrollbar">
                            <div class="inner-like">
                                <table class="bordered">
                                <tbody>
                                    @foreach($survey as $svy)
                                    <tr>
                                        <td>
                                            <h5 style="color: black">{{ucwords($svy->nama_survey)}}</h5>
                                        </td>
                                        <td width="20px">
                                           <button class="waves-effect waves-light btn blue lighten-1" onclick="klikSurvey({{$svy->id_survey}},'like')">
                                                <i class="material-icons prefix">thumb_up</i>
                                            </button>
                                        </td>
                                        <td width="20px">
                                            <button class="waves-effect waves-light btn red lighten-1" onclick="klikSurvey({{$svy->id_survey}},'dislike')">
                                                <i class="material-icons prefix">thumb_down</i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                            </div>
                        </div>                         
                    </div>   
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function klikSurvey(identitas,jenis){
            $.get("{{url('survey')}}/"+identitas+"/"+jenis,function(data, status){
                console.log(data);
            });
        }
    </script>
@endsection