@extends('layouts.app')

@section('content')
    
<div class="content-container row mx-auto">
    <div class="left-console-container col-3 border-end h-100">
        <div class="custom-header text-center my-4">
            <h2>Documentation Section</h2>
        </div>
        <div class="treeview-animated w-20 mx-4 my-4">
            <ul class="list-group list-group-flush ">
                <li class="tree-header list-group-item ">
                    <div 
                        class="tree-header d-flex align-items-center justify-content-between">
                        <h6 class="tree-title my-auto blue">
                            <a class="area" data-bs-toggle="collapse" data-bs-target="#area-1-target">Area 1 - Vision, Mission, Goals & Objectives</a>
                        </h6>
                    </div>
                    <div class="collapse mt-2" id="area-1-target"  id="tree">
                        <ul>
                            <li class="blue">
                                <p class="parameter" area-id="area-1" parameter-id="area-1-a">A. Statement of Vision , Mission, Goals, Objectives</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-1" parameter-id="area-1-b">B. Dissemination and Acceptability</p>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="tree-header list-group-item accordion">
                    <div class="tree-header d-flex align-items-center justify-content-between">
                        <h6 class="tree-title blue my-auto" onclick="">
                            <a class="area" data-bs-toggle="collapse" data-bs-target="#area-2-target">Area 2 - Faculty</a>
                        </h6>
                    </div>
                    <div class="area-2-params collapse mt-2" id="area-2-target">
                        <ul>
                            <li class="blue">
                                <p class="parameter" area-id="area-2" parameter-id="area-2-a">A. Academic Qualifications and Professional Experience</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-2" parameter-id="area-2-b">B. Recruitment, Selection, Orientation</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-2" parameter-id="area-2-c">C. Faculty Adequacy and Loading</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-2" parameter-id="area-2-d">D. Rank and Tenure</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-2" parameter-id="area-2-e">E. Faculty Development</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-2" parameter-id="area-2-f">F. Professional Performance and Scholarly Works</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-2" parameter-id="area-2-g">G. Salaries, Fringe Benefits and Incentives</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-2" parameter-id="area-2-h">H. Professionalism</p>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="tree-header list-group-item">
                    <div class="tree-header d-flex align-items-center justify-content-between">
                        <h6 class="tree-title blue my-auto" onclick="">
                            <a class="area" data-bs-toggle="collapse" data-bs-target="#area-3-target">Area 3 - Curriculum and Instruction</a>
                        </h6>
                        
                    </div>
                    <div class="collapse mt-2" id='area-3-target'>
                        <ul>
                            <li class="blue">
                                <p class="parameter" area-id="area-3" parameter-id="area-3-a">A. Curriculum and Program Studies</p>
                            </li> 
                            <li class="blue">
                                <p class="parameter" area-id="area-3" parameter-id="area-3-b">B. Instructional Processes, Methodologies, and Learning Enhancement Opportunities</p>
                            </li> 
                            <li class="blue">
                                <p class="parameter" area-id="area-3" parameter-id="area-3-c">C. Assessment of Academic Performance</p>
                            </li> 
                            <li class="blue">
                                <p class="parameter" area-id="area-3" parameter-id="area-3-d">D. Management of Learning</p>
                            </li> 
                            <li class="blue">
                                <p class="parameter" area-id="area-3" parameter-id="area-3-e">E. Graduation Requirements</p>
                            </li> 
                            <li class="blue">
                                <p class="parameter" area-id="area-3" parameter-id="area-3-f">F. Administrative Support from Effective Instruction</p>
                            </li> 
                        </ul>
                    </div>
                </li>
                <li class="tree-header list-group-item">
                    <div class="tree-header d-flex align-items-center justify-content-between">
                        <h6 class="tree-title blue my-auto">
                            <a class="area" data-bs-toggle="collapse" data-bs-target="#area-4-target" href="">Area 4 - Support to Students</a>
                        </h6>
                    </div>
                    <div class="collapse mt-2" id="area-4-target">
                        <ul>
                            <li class="blue">
                                <p class="parameter" area-id="area-4" parameter-id="area-4-a">A. Student Services Program</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-4" parameter-id="area-4-b">B. Student Welfare</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-4" parameter-id="area-4-c">C. Student Development</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-4" parameter-id="area-4-d">D. Institutional Student Programs and Services</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-4" parameter-id="area-4-e">E. Research, Monitoring and Evaluation</p>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="tree-header list-group-item">
                    <div class="tree-header d-flex align-items-center justify-content-between">
                        <h6 class="tree-title blue my-auto" onclick="">
                            <a class="area" data-bs-toggle="collapse" data-bs-target="#area-5-target" href="">Area 5 - Research</a>
                        </h6>
                    </div>
                    <div class="collapse mt-2" id="area-5-target">
                        <ul>
                            <li class="blue">
                                <p class="parameter" area-id="area-5" parameter-id="area-5-a">A. Priorities and Relevance</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-5" parameter-id="area-5-b">B. Funding and Other Resources</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-5" parameter-id="area-5-c">C. Implementation, Monitoring, Evaluation and Utilization of Research Results / Outputs</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-5" parameter-id="area-5-d">D. Publications and Dissemination</p>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="tree-header list-group-item">
                    <div class="tree-header d-flex align-items-center justify-content-between">
                        <h6 class="tree-title blue my-auto" onclick="">
                        <a class="area" data-bs-toggle="collapse" data-bs-target="#area-6-target" href="">Area 6 - Extension and Community Involvement</a>
                        </h6>
                    </div>
                    <div class="collapse mt-2" id="area-6-target">
                        <ul>
                            <li class="blue">
                                <p class="parameter" area-id="area-6" parameter-id="area-6-a">A. Priorities and Relevance</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-6" parameter-id="area-6-b">B. Planning, Implementation, Monitoring and Evaluation</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-6" parameter-id="area-6-c">C. Funding and Other Resources</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-6" parameter-id="area-6-d">D. Community Involvement and Participation</p>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="tree-header list-group-item">
                    <div class="tree-header d-flex align-items-center justify-content-between">
                        <h6 class="tree-title blue my-auto" onclick="">
                            <a class="area" data-bs-toggle="collapse" data-bs-target="#area-7-target" href="">Area 7 - Library</a>
                        </h6>
                    </div>
                    <div class="collapse mt-2" id="area-7-target">
                        <ul>
                            <li class="blue">
                                <p class="parameter" area-id="area-7" parameter-id="area-7-a">A. Administration</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-7" parameter-id="area-7-b">B. Administrative Staff</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-7" parameter-id="area-7-c">C. Collection Development, Organization and Preservation</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-7" parameter-id="area-7-d">D. Services and Utilization</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-7" parameter-id="area-7-e">E. Physical Set-up and Facilities</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-7" parameter-id="area-7-f">F. Financial Support</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-7" parameter-id="area-7-g">G. Linkages</p>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="tree-header list-group-item">
                    <div class="tree-header d-flex align-items-center justify-content-between">
                        <h6 class="tree-title blue my-auto" onclick="">
                            <a class="area" data-bs-toggle="collapse" data-bs-target="#area-8-target" href="">Area 8 - Physical Plant and Facilities</a>
                        </h6>
                    </div>
                    <div class="collapse mt-2" id="area-8-target">
                        <ul>
                            <li class="blue">
                                <p class="parameter" area-id="area-8" parameter-id="area-8-a">A. Campus</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-8" parameter-id="area-8-b">B. Buildings</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-8" parameter-id="area-8-c">C. Classrooms</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area_8" parameter-id="area-8-d">D. Offices, Staff, and Function Rooms</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-8" parameter-id="area-8-e">E. Assesmbly and Athletic Facilities</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-8" parameter-id="area-8-f">F. Medical and Dental Clinic</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-8" parameter-id="area-8-g">G. Student Center</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-8" parameter-id="area-8-h">H. Food Services / Canteens</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-8" parameter-id="area-8-i">I. Accreditation Center</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-8" parameter-id="area-8-j">J. Housing</p>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="tree-header list-group-item">
                    <div class="tree-header d-flex align-items-center justify-content-between">
                        <h6 class="tree-title blue my-auto" onclick="">
                            <a class="area" data-bs-toggle="collapse" data-bs-target="#area-9-target" href="">Area 9  - Laboratories</a>
                        </h6>
                    </div>
                    <div class="collapse mt-2" id="area-9-target">
                        <ul>
                            <li class="blue">
                                <p class="parameter" area-id="area-9" parameter-id="area-9-a">A. Laboratories and Shops / Facilities</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-9" parameter-id="area-9-b">B. Equipment and Supplies</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-9" parameter-id="area-9-c">C. Maintenance</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-9" parameter-id="area-9-d">D. Special Provisions</p>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="tree-header list-group-item">
                    <div class="tree-header d-flex align-items-center justify-content-between">
                        <h6 class="tree-title blue my-auto" onclick="">
                            <a class="area" data-bs-toggle="collapse" data-bs-target="#area-10-target" href="">Area 10 - Administration</a>
                        </h6>
                    </div>
                    <div class="collapse mt-2" id="area-10-target">
                        <ul>
                            <li class="blue">
                                <p class="parameter" area-id="area-10" parameter-id="area-10-a">A. Organization</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-10" parameter-id="area-10-b">B. Academic Administration</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-10" parameter-id="area-10-c">C. Student Administration</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-10" parameter-id="area-10-d">D. Financial Management</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-10" parameter-id="area-10-e">E. Supply Management</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-10" parameter-id="area-10-f">F. Records Management</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-10" parameter-id="area-10-g">G. Institutional Planning and Development</p>
                            </li>
                            <li class="blue">
                                <p class="parameter" area-id="area-10" parameter-id="area-10-h">H. Performance of Administrative Personel</p>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>  
    <div class="right-console-container col-8">
        <div class="custom-headerm ms-4 my-4">
            <h2>Content</h2>
        </div>
        <div class="console-content">                      
            <div class="ms-4 indicators" style="display: block;">
                <div class="indicator-banner">
                    <h3>Indicators</h3>
                </div>
                <hr>
                <div class="system-inputs-and-processes mb-2" indicator="System - Inputs and Processes">
                    <div class="mini-header d-flex justify-content-between mb-3 align-items-center">
                        <h4 class="mb-0 pb-0">System - Inputs and Processes</h4>  
                        <button class='btn btn-primary add-data-buttons' indicator='sip' indicator-id="0">Add New Data</button>
                    </div>
                    
                    <ul class="sip-list mb-2 list-group " style="list-style-type: none">        
                    </ul>
                </div>

                <div class="implementation mb-2"  indicator="Implementations">
                    <div class="mini-header d-flex justify-content-between mb-3 align-items-center">
                        <h4 class="mb-0 pb-0">Implementation</h4>
                        <button class='btn btn-primary add-data-buttons' indicator='implementations' indicator-id="1">Add New Data</button>
                    </div>
                    <ul class="list-group imp-list mb-2" style="list-style-type: none">
                    </ul>
                </div>

                <div class="outputs" indicator="Outputs">
                    <div class="mini-header d-flex justify-content-between mb-3 align-items-center">
                        <h4 class="mb-0 pb-0">Outputs</h4>
                        <button class='btn btn-primary add-data-buttons' indicator='outputs' indicator-id="2">Add New Data</button>
                    </div>
                    <ul class="list-group out-list mb-2" style="list-style-type: none">
                    </ul>
                </div>
            </div>
        </div>

        <!--Add Data Modal -->
        <div class="modal fade" id="add-data-modal" tabindex="-1" aria-labelledby="form"        aria-hidden="form">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form 
                            enctype="multipart/form-data"
                            action="{{url('/api/data/new-data')}}" 
                            method="POST" 
                            class="new-sip-form mb-2">
                                <div class="mb-3 mx-3">
                                    <label for="area-id" class="form-label">Area No.</label>
                                    <input class="area-id-field" type="hidden" name="area_id" readonly/>   
                                    <input type="text" class="form-control disabled area-field" id="area-id" name="area" readonly>
                                </div>
                                <div class="mb-3 mx-3">
                                    <label for="area-id" class="form-label">Parameter</label>
                                    <input class="parameter-id-field" type="hidden" name="parameter_id" readonly/>
                                    <input type="text" class="form-control disabled parameter-field" id="parameter-id" name="parameter"  readonly>
                                </div>
                                <div class="mb-3 mx-3">
                                    <label for="area-id" class="form-label">Indicator</label>
                                    <input class="indicator-id-field" type="hidden" name="indicator-id" readonly/>
                                    <input type="text" class="form-control disabled indicator-field" id="indicator-id" name="indicator" readonly>
                                </div>
                                <div class="mb-3 mx-3">
                                    <label for="area-id" class="form-label">Title</label>
                                    <input type="text" class="form-control " id="area-id" name="title" value="" autocomplete="off" required>
                                </div>
                                <div class="mb-3 mx-3">
                                    <label for="area-id" class="form-label">Description</label>
                                    <input type="text" class="form-control" id="area-id" name="description" value="" autocomplete="off" required>
                                </div>
                                <div class="mb-3 mx-3">
                                    <label for="area-id" class="form-label">Content</label>
                                    <input type="hidden" name="MAX_FILE_SIZE" value="9000000" />
                                    <input type="file" class="form-control" name="files[]" autocomplete="off" multiple>
                                </div>
                                <div class="mb-3 d-flex gap-2 justify-content-end me-3">
                                    <button type="button dismiss-modal" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name='submit'>Submit</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- Edit Data Modal --}}
        <div class="modal fade" id="edit-data-modal" tabindex="-1" aria-labelledby="form"        aria-hidden="form">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form 
                            enctype="multipart/form-data"
                            action="{{url('/api/data/edit-data')}}" 
                            method="POST" 
                            class="edit-form mb-2">
                                <input class="target-id-field" type="hidden" name="target-id" readonly/>
                                <input class="target-indicator-field" type="hidden" name="target-indicator" readonly/>
                                <div class="mb-3 mx-3">
                                    <label for="area-id" class="form-label">Area No.</label>
                                    <input type="text" class="form-control disabled edit-area-field" id="area-id" name="area" readonly>
                                </div>

                                <div class="mb-3 mx-3">
                                    <label for="area-id" class="form-label">Parameter</label>
                                    <input class="parameter-id-field" type="hidden" name="parameter-id" readonly/>
                                    <input type="text" class="form-control disabled edit-parameter-field" id="parameter-id" name="parameter"  readonly>
                                </div>
                                <div class="mb-3 mx-3">
                                    <label for="area-id" class="form-label">Indicator</label>
                                    <input class="indicator-id-field" type="hidden" name="indicator-id" readonly/>
                                    <input type="text" class="form-control disabled edit-indicator-field" id="indicator-id" name="indicator" readonly>
                                </div>
                                <div class="mb-3 mx-3">
                                    <label for="area-id" class="form-label">Title</label>
                                    <input type="text" class="form-control  edit-title-field" id="area-id" name="title" value="" autocomplete="off" required>
                                </div>
                                <div class="mb-3 mx-3">
                                    <label for="area-id" class="form-label">Description</label>
                                    <input type="text" class="form-control edit-description-field" id="area-id" name="description" value="" autocomplete="off">
                                </div>
                                <div class="mb-3 mx-3">
                                    <label for="area-id" class="form-label">Content</label>
                                    <input type="hidden" name="MAX_FILE_SIZE" value="9000000" />
                                    <input type="file" class="form-control" onchange="readImageData(this);" name="files[]" autocomplete="off" multiple>
                                </div>
                                <div class="mb-3 d-flex gap-2 justify-content-end me-3">
                                    <button type="button dismiss-modal" class="btn btn-secondary" data-bs-dismiss="modal">Dismiss</button>
                                    <button type="submit" class="btn btn-primary" name='submit'>Submit</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <script src="../b"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script type="text/javascript">
        var currentActive = '';
        var activeParameter = '';
        var activeArea = '';
        var activeIndicator = '';
                            
        var activeAreaId = ''; 
        var activeParameterId = '';  
        var activeIndicatorId = '';

        var activeAreaIdField = document.querySelector('.area-id-field');
        var activeParameterIdField = document.querySelector('.parameter-id-field');
        var activeIndicatorIdField = document.querySelector('.indicator-id-field');

        var hyperlinks = document.querySelectorAll('.blue');
        var addDataButton = document.querySelectorAll('.add-data-buttons');
        var areaField = document.querySelector('.area-field');
        var parameterField = document.querySelector('.parameter-field');
        var indicatorField = document.querySelector('.indicator-field');
        var parameters = document.querySelectorAll('.parameter');
        
        var sipListSection = document.querySelector('.sip-list');
        var impListSection = document.querySelector('.imp-list');
        var outListSection = document.querySelector('.out-list');
        
        var addDataModal = new bootstrap.Modal(document.getElementById('add-data-modal'));  
        var editDataModal = new bootstrap.Modal(document.getElementById('edit-data-modal'));

        var editAreaField = document.querySelector('.edit-area-field');
        var editParameterField = document.querySelector('.edit-parameter-field');
        var editIndicatorField = document.querySelector('.edit-indicator-field');
        var editTitleField = document.querySelector('.edit-title-field');
        var editDescriptionField = document.querySelector('.edit-description-field');

        // Global Executions
        hyperlinks.forEach(node => {
            node.addEventListener('click', (e)=>{
                if(currentActive === ""){
                    node.classList.add('active');
                    currentActive = node;
                } else {
                    currentActive.classList.remove('active');
                    node.classList.add('active');
                    currentActive = node;
                }
            })
        });

        //Forces to Remove Old Data from Ajax
        function removeOldData(){
            var itemContainer = document.querySelectorAll('.item-container');
            itemContainer.forEach(
                function(currentValue, currentIndex, listObj) {
                    currentValue.parentNode.removeChild(currentValue);
                }
            );
        }

        parameters.forEach(parameter => {  
            parameter.addEventListener('click', () => {
                activeParameter = parameter.textContent;
                activeParameterId = parameter.getAttribute('parameter-id');
                removeOldData();
                showSystemObjects(activeParameterId); 
                showImplementationsObjects(activeParameterId);
                showOutputsObjects(activeParameterId)
            });
        })


        addDataButton.forEach(node=>{
            node.addEventListener('click', (e)=>{
                areaField.value = `Area ${activeArea}`;
                activeAreaIdField.value = activeArea;

                parameterField.value = activeParameter;
                activeParameterIdField.value = activeParameterId;

                activeIndicatorId = node.getAttribute('indicator-id');
                activeIndicatorIdField.value = activeIndicatorId;

                if(node.getAttribute('indicator') === 'sip'){
                    indicatorField.value = 'System - Inputs and Processes';
                } else if(node.getAttribute('indicator') === 'implementations'){
                    indicatorField.value =  'Implementations'
                } else {
                    indicatorField.value = 'Outputs';
                }
                activeIndicator.value = node.getAttribute('indicator-id');
                if(areaField.value === 'Area ' || parameterField.value.length == 0){
                    alert('Please Select Area and Parameter');
                } else {
                    addDataModal.show();
                }
            })
        })

        var areas = document.querySelectorAll('.area');
        for(let i = 0; i < areas.length; i++){
            areas[i].addEventListener('click', ()=>{
                activeArea = i + 1;
            });
        }

        // Functions Only
        function toggleOpen(classname){
            // console.log(classname); 
            var selected = document.querySelector(classname);
            selected.style.display = 'block';
        }

        function toggleClose(classname){
            var selected = document.querySelector(classname);
            selected.style.display = 'none';
        }


        function generateHtml(object){
            const itemContainer = document.createElement('div');
            const p1 = document.createElement("p");
            const p2 = document.createElement("p");
            const p3 = document.createElement("p");
            const buttonContainer = document.createElement('div');
            const editButton = document.createElement('button');
            const deleteButton = document.createElement('button');
            const files = document.createTextNode("Files:");
            const imageContainer = document.createElement('div');

            //files related
            const parsedFiles = JSON.parse(JSON.stringify(unserialize(object['files'])));

            for (var key in parsedFiles) {
                // console.log(`${parsedFiles[key]}`);
                newParsedFiles = parsedFiles[key].split('.');
                const image = document.createElement('img');
                const anchor = document.createElement('a');
                const div = document.createElement('div');
                const filename = document.createElement('p');

                // div.setAttribute('style', 'height: 50px; width: 50px');
                if(newParsedFiles['1'] == 'pdf' ){
                    anchor.setAttribute('href', "{{asset('storage/files/')}}" + "/" + parsedFiles[key]);
                    filename.innerText = parsedFiles[key];
                    div.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-file-earmark-pdf" viewBox="0 0 16 16"><path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/><path d="M4.603 14.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.697 19.697 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.188-.012.396-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.066.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.712 5.712 0 0 1-.911-.95 11.651 11.651 0 0 0-1.997.406 11.307 11.307 0 0 1-1.02 1.51c-.292.35-.609.656-.927.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.266.266 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.71 12.71 0 0 1 1.01-.193 11.744 11.744 0 0 1-.51-.858 20.801 20.801 0 0 1-.5 1.05zm2.446.45c.15.163.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.876 3.876 0 0 0-.612-.053zM8.078 7.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/></svg>';
                    anchor.appendChild(div);
                    anchor.appendChild(filename);
                    imageContainer.appendChild(anchor);
                } else {    
                    image.setAttribute(
                        'src',
                        "{{asset('storage/files/')}}" + "/" + parsedFiles[key]
                    );

                    image.classList.add('image-from-database');
                    anchor.setAttribute('href', "{{asset('storage/files/')}}" + "/" + parsedFiles[key]);
                    anchor.setAttribute('alt', parsedFiles[key]);
                    anchor.setAttribute('target', '_blank')

                    anchor.appendChild(image);
                    imageContainer.appendChild(anchor);
                }
            }

            //defining inner contents
            const title = document.createTextNode("Title: " + object['title']);
            const description = document.createTextNode("Description: " + object['description']);


            //inner nodes
            editButton.innerHTML = 'Edit';
            deleteButton.innerHTML = 'Delete';

            //adding important bootstrap classes
            buttonContainer.classList.add('d-flex');
            buttonContainer.classList.add('justify-content-end');

            editButton.classList.add('btn');
            editButton.classList.add('btn-primary');
            editButton.classList.add('me-2');

            deleteButton.classList.add('btn');
            deleteButton.classList.add('btn-danger');
            deleteButton.classList.add('me-4');

            
            itemContainer.classList.add('item-container');
            itemContainer.classList.add('border');
            itemContainer.classList.add('border-round');
            itemContainer.classList.add('mb-3');
            itemContainer.classList.add('p-2')

            imageContainer.classList.add('d-flex');
            imageContainer.classList.add('flex-wrap');
            imageContainer.classList.add('gap-2');
            imageContainer.classList.add('border-rounded');
            imageContainer.classList.add('align-items-center');
            imageContainer.classList.add('mb-3');
            
            //appending elements
            buttonContainer.appendChild(editButton);
            buttonContainer.appendChild(deleteButton);

            p1.appendChild(title);
            p2.appendChild(description);
            p3.appendChild(files);

            itemContainer.appendChild(p1);
            itemContainer.appendChild(p2);
            itemContainer.appendChild(p3);
            itemContainer.appendChild(imageContainer);
            itemContainer.appendChild(buttonContainer);

            //eventListeners
            editButton.addEventListener('click', function(){
                const targetId = object['id'];
                editAreaField.value = activeArea;
                editParameterField.value = activeParameter;
                editIndicatorField.value = itemContainer.parentNode.parentNode.getAttribute('indicator');
                editTitleField.value = object['title'];
                editDescriptionField.value = object['description'];

                const targetIdInput = document.querySelector('.target-id-field')
                targetIdInput.value = object['id'];

                editDataModal.show();
            }, false);

            deleteButton.addEventListener('click', function(){
                deleteData(object['id'], itemContainer.parentNode.parentNode.getAttribute('indicator'))
            }, false);

            return itemContainer;
        }

        function declareNoDataFound(){
            const itemContainer = document.createElement('div');
            const p = document.createElement('p');
            const text = document.createTextNode('No data found.');

            p.appendChild(text);
            itemContainer.appendChild(p);
            itemContainer.classList.add('item-container');
            return itemContainer;
        }

        async function showSystemObjects(parameter_Id){
            const url = '{{url('/api/parameter/')}}' + '/' + parameter_Id;
            const response = await fetch(url);
            const data = await response.json();
            if(data.systems.length != 0){
                for(let key in data.systems){
                    sipListSection.appendChild(generateHtml(data.systems[key]));
                }
            } else {
                sipListSection.appendChild(declareNoDataFound());
            }
        }

        async function showImplementationsObjects(parameter_Id){
            const url = '{{url('/api/parameter/')}}' + '/' + parameter_Id;
            const response = await fetch(url);
            const data = await response.json();
            if(data.implementations.length != 0){
                for(let key in data.implementations){
                    impListSection.appendChild(generateHtml(data.implementations[key]));
                }
            } else {
                impListSection.appendChild(declareNoDataFound());
            }
        }

        async function showOutputsObjects(parameter_Id){
            const url = '{{url('/api/parameter/')}}' + '/' + parameter_Id;
            const response = await fetch(url);
            const data = await response.json();
            
            if(data.outputs.length != 0){
                for(let key in data.outputs){
                    outListSection.appendChild(generateHtml(data.outputs[key]));;
                }
            } else {
                outListSection.appendChild(declareNoDataFound());
            }
        }

        function deleteData(itemId, indicator){
            if(indicator === 'System - Inputs and Processes'){
                indicator = 'systems';
            } 
            const url = `{{url('/api/data')}}?indicator=${indicator}&itemId=${itemId}`;
            if (confirm('Are you sure you want to delete this entry from the database?')) {
                fetch(url, {
                    method: 'POST'
                    })
                    .then((response) => {
                        if (response.status == 200) {
                            alert('Item Deleted Successfully')
                        } else {
                            alert('Error Deleting Item. Contact Admin Immediately')
                        }
                    });
                    
                removeOldData();
                showSystemObjects(activeParameterId); 
                showImplementationsObjects(activeParameterId);
                showOutputsObjects(activeParameterId)
            }
        }

        function unserialize(data){  
            var error = function (type, msg, filename, line){throw new window[type](msg, filename, line);};  
            var read_until = function (data, offset, stopchr){  
                var buf = [];  
                var chr = data.slice(offset, offset + 1);  
                var i = 2;  
                while(chr != stopchr){  
                    if((i+offset) > data.length){  
                        error('Error', 'Invalid');  
                    }  
                    buf.push(chr);  
                    chr = data.slice(offset + (i - 1),offset + i);  
                    i += 1;  
                }  
                return [buf.length, buf.join('')];  
            };  
            var read_chrs = function (data, offset, length){  
                buf = [];  
                for(var i = 0;i < length;i++){  
                    var chr = data.slice(offset + (i - 1),offset + i);  
                    buf.push(chr);  
                }  
                return [buf.length, buf.join('')];  
            };  
            var _unserialize = function (data, offset){  
                if(!offset) offset = 0;  
                var buf = [];  
                var dtype = (data.slice(offset, offset + 1)).toLowerCase();  
                
                var dataoffset = offset + 2;  
                var typeconvert = new Function('x', 'return x');  
                var chrs = 0;  
                var datalength = 0;  
                
                switch(dtype){  
                    case "i":  
                        typeconvert = new Function('x', 'return parseInt(x)');  
                        var readData = read_until(data, dataoffset, ';');  
                        var chrs = readData[0];  
                        var readdata = readData[1];  
                        dataoffset += chrs + 1;  
                    break;  
                    case "b":  
                        typeconvert = new Function('x', 'return (parseInt(x) == 1)');  
                        var readData = read_until(data, dataoffset, ';');  
                        var chrs = readData[0];  
                        var readdata = readData[1];  
                        dataoffset += chrs + 1;  
                    break;  
                    case "d":  
                        typeconvert = new Function('x', 'return parseFloat(x)');  
                        var readData = read_until(data, dataoffset, ';');  
                        var chrs = readData[0];  
                        var readdata = readData[1];  
                        dataoffset += chrs + 1;  
                    break;  
                    case "n":  
                        readdata = null;  
                    break;  
                    case "s":  
                        var ccount = read_until(data, dataoffset, ':');  
                        var chrs = ccount[0];  
                        var stringlength = ccount[1];  
                        dataoffset += chrs + 2;  
                        
                        var readData = read_chrs(data, dataoffset+1, parseInt(stringlength));  
                        var chrs = readData[0];  
                        var readdata = readData[1];  
                        dataoffset += chrs + 2;  
                        if(chrs != parseInt(stringlength) && chrs != readdata.length){  
                            error('SyntaxError', 'String length mismatch');  
                        }  
                    break;  
                    case "a":  
                        var readdata = {};  
                        
                        var keyandchrs = read_until(data, dataoffset, ':');  
                        var chrs = keyandchrs[0];  
                        var keys = keyandchrs[1];  
                        dataoffset += chrs + 2;  
                        
                        for(var i = 0;i < parseInt(keys);i++){  
                            var kprops = _unserialize(data, dataoffset);  
                            var kchrs = kprops[1];  
                            var key = kprops[2];  
                            dataoffset += kchrs;  
                            
                            var vprops = _unserialize(data, dataoffset);  
                            var vchrs = vprops[1];  
                            var value = vprops[2];  
                            dataoffset += vchrs;  
                            
                            readdata[key] = value;  
                        }  
                        
                        dataoffset += 1;  
                    break;  
                    default:  
                        error('SyntaxError', 'Unknown / Unhandled data type(s): ' + dtype);  
                    break;  
                }  
                return [dtype, dataoffset - offset, typeconvert(readdata)];  
            };  
            return _unserialize(data, 0)[2];  
        }  

    </script>
@endsection
