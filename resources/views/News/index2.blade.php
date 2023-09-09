<table id="item-lists" class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>#</th>
    
        <th>Title_New</th>
    
    <th>Address</th>
    <th>Slug</th>
    
    <th>details</th>
    <th>Status</th>
    
    
    
    
    <th>Category</th>
    <th>Writer</th>
    
    
    <th>Title</th>
    
    
    <th>Language</th>
    
    
    <th>Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach($data as $info)
                                    <tr>
                                        <td>
                                            {{$loop->iteration}}
                                        </td>
                                      <td class="profile-image"><a href="#"><img width="28" height="28"
                                                                                   src="{{ $info->image !='' ? $info->image :asset('dashboard/assets/img/profiles/avatar-02.jpg')}}"
                                                                                   class="rounded-circle m-r-5"
                                                                                   alt="">{{ $info->title_new}}</a>
                                        </td>
                                        <td>
                                            <span class="custom-badge status-blue ">{{$info->address}}</span>
    
                                        </td>
                                        <td>
                                            <span class="custom-badge status-blue ">{{$info->slug}}</span>
    
                                        </td>
                                        <td>
                                            <span class="custom-badge status-blue ">{{$info->details}}</span>
    
                                        </td>
                                        <td>
                                            <span class="custom-badge status-blue ">{{$info->Status->name}}</span>
    
                                        </td>
                                        <td>
                                            <span class="custom-badge status-blue ">{{$info->Category->name}}</span>
    
                                        </td>
                                        <td>
                                            <span class="custom-badge status-blue ">{{$info->Writer->name}}</span>
    
                                        </td>
                                        <td>
                                            <span class="custom-badge status-blue ">{{$info->title}}</span>
    
                                        </td>
                                        <td>
                                            <span class="custom-badge status-blue ">{{$info->Language->name}}</span>
    
                                        </td>
                                     
                           
    
    
                                  
                                      <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle"
                                                   data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                       data-bs-target="#edit_category" data-category_id="{{$info->id}}"
                                                       data-name="{{$info->name}}" data-slug="{{$info->slug}}"
                                                    ><i
                                                            class="fa-solid fa-pen-to-square m-r-5"></i> Edit</a>
    
                                                    <a class="dropdown-item" data-category_id="{{$info->id}}" href="#"
                                                       data-bs-toggle="modal" data-bs-target="#delete_category"><i
                                                            class="fa fa-trash-alt m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
    
                                @endforeach
    </tbody>
    
    <tfoot>
    <tr>
        <th>#</th>
    
        <th>Title_New</th>
    
    <th>Address</th>
    <th>Slug</th>
    
    <th>details</th>
    <th>Status</th>
    
    
    
    
    <th>Category</th>
    <th>Writer</th>
    
    
    <th>Title</th>
    
    
    <th>Language</th>
    
    
    
    <th>Action</th>
    </tr>
    </tfoot>
    </table>
    
    
    </div>
    {!! $data->links() !!}
    </div>
    