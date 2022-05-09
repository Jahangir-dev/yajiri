<div class="modal fade" id="chooseCategoryModal" tabindex="-1" aria-labelledby="LoginRegisterModal1Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title" id="LoginRegisterModal1Label">Add Categories</p>
                </div>
                <div class="modal-body">
                   <form method="post" action="{{route('user_save_categories')}}" id="save_btn_categories_user_form">     
                    @csrf
                    <input type="hidden" name="modified" value="1">
                    <div class="row">
                        <div class="col-12">
                            <label>Categories</label>
                            <select class="form-control" name="category[]" id="category" multiple>
                                 <option>Choose</option>       
                                 @foreach($category as $c)
                                    @if(!in_array($c->id, $my_categories))
                                        <option value="{{$c->id}}">{{$c->name}}</option>
                                     @endif   
                                    @endforeach
                            </select>
                        </div>
                    </div>

                     <div class="LRM1Button row mt-2">
                        <a role="button" id="save_btn_categories_user" type="button" style="text-decoration:none !important">
                            <p style="color: white;margin-top: 10px;">Save</p>
                        </a>
                    </div>

                    </form>

                </div>
                <div class="modal-footer" style="margin: auto;border: none;">
                   
                </div>
            </div>
        </div>
    </div>