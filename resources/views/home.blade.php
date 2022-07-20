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
                            action="{{url('/api/data')}}" 
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
                                    <!-- MAX_FILE_SIZE must precede the file input field -->
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
                            action="{{url('/api/data')}}" 
                            method="POST" 
                            class="new-sip-form mb-2">
                                <div class="mb-3 mx-3">
                                    <label for="area-id" class="form-label">Area No.</label>
                                    <input class="area-id-field" type="hidden" name="area-id" readonly/>   
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
                                    <input type="text" class="form-control " id="area-id" name="title" value="" autocomplete="off" required>
                                </div>
                                <div class="mb-3 mx-3">
                                    <label for="area-id" class="form-label">Description</label>
                                    <input type="text" class="form-control" id="area-id" name="description" value="" autocomplete="off">
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
        var editDataModal = new window.bootstrap.Modal(document.getElementById('edit-data-modal'));

        var editAreaField = document.querySelector('.edit-area-field');
        var editParameterField = document.querySelector('.edit-parameter-field');
        var editIndicatorField = document.querySelector('.edit-indicator-field');

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
                showOutputsObjects(activeParameterId);
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
                    // console.log(addDataModal);
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
            console.log(classname); 
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
            
            //defining inner contents
            const title = document.createTextNode("Title: " + object['title']);
            const description = document.createTextNode("Description: " + object['description']);
            const files = document.createTextNode("Files: " + object['title']);

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

            //appending elements
            buttonContainer.appendChild(editButton);
            buttonContainer.appendChild(deleteButton);

            p1.appendChild(title);
            p2.appendChild(description);
            p3.appendChild(files);

            itemContainer.appendChild(p1);
            itemContainer.appendChild(p2);
            itemContainer.appendChild(p3);
            itemContainer.appendChild(buttonContainer);
            

            //eventListeners
            editButton.addEventListener('click', function(){
                console.log(activeArea);
                console.log(activeParameterId);
                console.log(object);
                
                editAreaField.value = activeArea;
                editParameterField.value = activeParameter;
                editIndicatorField.value = itemContainer.parentNode.parentNode.getAttribute('indicator');
                
                
                editDataModal.show();
            }, false);

            deleteButton.addEventListener('click', function(){
                //pass indicator type (system, implementation, outputs);
                //pass item id to delete
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

        // function editData(){
        //     areaField.value = `Area ${activeArea}`;
        //     activeAreaIdField.value = activeArea;

        //     parameterField.value = activeParameter;
        //     activeParameterIdField.value = activeParameterId;

        //     activeIndicatorId = node.getAttribute('indicator-id');
        //     activeIndicatorIdField.value = activeIndicatorId;

        //     if(node.getAttribute('indicator') === 'sip'){
        //         indicatorField.value = 'System - Inputs and Processes';
        //     } else if(node.getAttribute('indicator') === 'implementations'){
        //         indicatorField.value =  'Implementations'
        //     } else {
        //         indicatorField.value = 'Outputs';
        //     }
                
        //     activeIndicator.value = node.getAttribute('indicator-id');
                
        //     console.log(activeArea);
        //     console.log(activeParameter);
        //     // editDataModal.show();
        // }

        function deleteData(itemId, indicator){
            console.log(itemId, indicator);
            if(indicator === 'System - Inputs and Processes'){
                indicator = 'systems';
            } 
            const url = `{{url('/api/data')}}?indicator=${indicator}&itemId=${itemId}`;
            fetch(url, {
                method: 'POST'
            })
            .then((response) => {
                if (!response.ok) {
                    // error processing
                    throw 'Error';
                }
                return response.json()
            })

            if (confirm('Are you sure you want to delete this entry from the database?')) {
            } else {
                // Do nothing!
                console.log('Process Aborted');
            }
        }
    </script>
@endsection
