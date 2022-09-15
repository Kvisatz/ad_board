<a href="#selectRegion" data-toggle="modal" class="selectRegion bl-inl al-mid c-20 s15">
    <span class="hidden-xsm bl-inl al-mid sp-now regw">Все регионы</span>
</a>


<div class="modal fade" id="selectRegion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-content-region">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title text-center s18" id="exampleModalLabel">Выбор региона</h4> 
                <div class="bl-regionlist br3">
                    <div class="region_current">
                        <a href="/assets#" id="region_select_current">
                            <span id="region_select_current_name"></span>
                        </a>
                    </div>  
                    <div class="RegionFilter pos-rel">
                        <input type="text" id="region-modal-filter" value="" class="form-control" placeholder="Фильтр по названию..." autocomplete="off">
                        <a id="region-modal-clear" class="pos-abs bl-bl s16 point c-a  text-center">×</a>
                    </div>
                    <ul id="regionlist" style="">

                        @foreach($regions as $region)
                            <li>
                                <a href="#" class="" id="rl1">{{$region->name}}</a>
                            </li>
                        @endforeach


                    </ul>
                </div>
                <div id="region_loader_img" style="display:none;">
                    <div>Пожалуйста, подождите...</div>
                </div>
                <div class="region_control">
                    <a href="#" id="region_select_back" class="btn btn-default btn-xs">Назад</a>
                    <a href="#" id="region_select_all" class="btn btn-default btn-xs pull-right">Все регионы</a>
                </div>
            </div>
        </div>
    </div>
</div>