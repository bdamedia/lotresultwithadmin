@extends('layouts.master')

@section('title')
Orders Add  | Application
@endsection

@section('content')
<div>
<h2>Add Lottery</h2>
<div id="error">
  @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
</div>
<div id="success">
  @if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif
</div>
<form  class="form-horizontal" role="form" method="POST" action="{{ url('/lots/store/') }}">
    {!! csrf_field() !!}
  <fieldset>

    <div class="form-group">
      <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Result Day Time</label>
      <div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5 date" name="amount_date"  value="{{old('amount')}}" placeholder="Enter Amount" required >
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Lottery Region</label>
      <div class="col-sm-9">
       <!--  <input type="text" class="col-xs-10 col-sm-5" name="orderNumber" value="{{old('orderNumber')}}" placeholder="Enter orderNumber" required > -->
        <select name="myregion" id="myregion" required>
            @php $g = 1; @endphp
               @foreach($content as $key=>$printresult)
               @php $end = strlen($printresult)-4; @endphp
                  <option value="{{ substr($printresult,2,$end) }}">{{ substr($printresult,2,$end) }}</option>
                @php $g++; @endphp
            @endforeach
        </select>
      </div>

    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Lottery Company</label>
      <div class="col-sm-9">
        <select name="myselect" id="myselect" required>
            
                  <option value="" >
                    
                  </option>
                 
            
        </select>
      </div>
    </div>
    
    <!-- <div class="form-group">
      <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Order Amount</label>
      <div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" name="amount"  value="{{old('amount')}}" placeholder="Enter Amount" required >
      </div>
    </div> -->


    <!-- <div class="form-group">
      <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Result Day Time</label>
      <div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5 date" name="amount_date"  value="{{old('amount')}}" placeholder="Enter Amount" required >
      </div>
    </div> -->

    
    <!-- <div class="form-group">
      <label class="col-sm-3 control-label no-padding-right" for="form-field-1">D 9</label>
      <div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" name="orderNumber"  value="{{old('amount')}}" placeholder="Enter Amount" required >
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label no-padding-right" for="form-field-1">D 8</label>

      <div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" name="amount"  value="{{old('amount')}}" placeholder="Enter Amount" required >
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label no-padding-right" for="form-field-1">D 7</label>

      <div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" name="amount_d7"  value="{{old('amount')}}" placeholder="Enter Amount" >
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label no-padding-right" for="form-field-1">D 6</label>

      <div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" name="amount_d6"  value="{{old('amount')}}" placeholder="Enter Amount"  >
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label no-padding-right" for="form-field-1">D 5</label>

      <div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" name="amount_d5"  value="{{old('amount')}}" placeholder="Enter Amount"  >
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label no-padding-right" for="form-field-1">D 4</label>

      <div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" name="amount_d4"  value="{{old('amount')}}" placeholder="Enter Amount"  >
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label no-padding-right" for="form-field-1">D 3</label>

      <div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" name="amount_d3"  value="{{old('amount')}}" placeholder="Enter Amount"  >
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label no-padding-right" for="form-field-1">D 2</label>

      <div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" name="amount_d2"  value="{{old('amount')}}" placeholder="Enter Amount"  >
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label no-padding-right" for="form-field-1">D 1</label>

      <div class="col-sm-9">
        <input type="text" class="col-xs-10 col-sm-5" name="amount_d1"  value="{{old('amount')}}" placeholder="Enter Amount"  >
      </div>
    </div>
     -->

      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">D 9</label>
        <div class="col-sm-9">
          <section id='section-basic-9'>
              <input pattern="[0-9]" name='tags-9' class='some_class_name' placeholder='write some value' value='xxx' autofocus data-blacklist='.NET,PHP'>
          </section>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">D 8</label>
        <div class="col-sm-9">
          <section id='section-basic-8'>
              <input pattern="[0-9]" name='tags-8' class='some_class_name' placeholder='write some value' value='xxx' autofocus data-blacklist='.NET,PHP'>
          </section>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">D 7</label>
        <div class="col-sm-9">
          <section id='section-basic-7'>
              <input pattern="[0-9]" name='tags-7' class='some_class_name' placeholder='write some value' value='xxx' autofocus data-blacklist='.NET,PHP'>
          </section>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">D 6</label>
        <div class="col-sm-9">
          <section id='section-basic-6'>
              <input pattern="[0-9]" name='tags-6' class='some_class_name' placeholder='write some value' value='xxx' autofocus data-blacklist='.NET,PHP'>
          </section>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">D 5</label>
        <div class="col-sm-9">
          <section id='section-basic-5'>
              <input pattern="[0-9]" name='tags-5' class='some_class_name' placeholder='write some value' value='xxx' autofocus data-blacklist='.NET,PHP'>
          </section>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">D 4</label>
        <div class="col-sm-9">
          <section id='section-basic-4'>
              <input pattern="[0-9]" name='tags-4' class='some_class_name' placeholder='write some value' value='xxx' autofocus data-blacklist='.NET,PHP'>
          </section>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">D 3</label>
        <div class="col-sm-9">
          <section id='section-basic-3'>
              <input pattern="[0-9]" name='tags-3' class='some_class_name' placeholder='write some value' value='xxx' autofocus data-blacklist='.NET,PHP'>
          </section>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">D 2</label>
        <div class="col-sm-9">
          <section id='section-basic-2'>
              <input pattern="[0-9]" name='tags-2' class='some_class_name' placeholder='write some value' value='xxx' autofocus data-blacklist='.NET,PHP'>
          </section>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">D 1</label>
        <div class="col-sm-9">
          <section id='section-basic-1'>
              <input pattern="[0-9]" name='tags-1' class='some_class_name' placeholder='write some value' value='xxx' autofocus data-blacklist='.NET,PHP'>
          </section>
        </div>
      </div>


       <!-- <section id="section-advance-options">
            <input name='tags3' placeholder='Write some tags' pattern='^[A-Za-z_✲ ]{1,15}$'>
       </section> -->

        <!-- <section id="section-advance-options">
                <input name='tags3' placeholder='Write some tags' pattern='^[A-Za-z_✲ ]{1,15}$'>
        </section> -->

      
        

	<div class="space-4"></div>

  <div class="clearfix">
    <div class="col-md-offset-3 col-md-9">
      <button class="btn btn-info" type="submit">
        <i class="ace-icon fa fa-check bigger-110"></i>
        Add New
      </button>

    </div>
  </div>
    </div>
  </fieldset>
</form>

</div>
@endsection

@section('footerjs')
<script type="text/javascript">
  $('.date').datepicker({  
    format: 'mm-dd-yyyy'
  });  
  $(document).ready(function() {
    $('#myregion').change(function() {
        var $id = $(this).find(':selected')[0].value;
         $("#myselect option").remove();
        //console.log($id );
        //console.log('testingggg');
        jQuery.ajax({
        url: "{{ url('/lots/dropdownlist') }}/" + $id,
        method: 'get',
        success: function(result){
            //console.log('testomgggg');
            //console.log(result);
            $.each( result, function(k, v) {
                console.log(v);
                $('#myselect').append($('<option>', {value:v, text:v}));
            });
            //$('#myselect').append($('<option>', {value:'test', text:'reee'}));
        }});        
    });
  });
</script>

<script>

  function isNumberKey(evt){
      var charCode = (evt.which) ? evt.which : evt.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57))
          return false;
      return true;
  }

  document.forms[0].reset()
  window.tagified = {
    "basic"             : 1,
    "textarea"          : 1,
    "mix"               : 1,
    "manual-suggestions": 1,
    "outside-of-the-box": 1,
    "advance-options"   : 1,
    "extra-properties"  : 1,
    "readonly"          : 1,
    "readonly-mixed"    : 1,
    "mode-select"       : 1,
  };
  (function(){
    for( var sectionName in tagified ){
      if( tagified[sectionName] == 0 && document.getElementById('section-' + sectionName) )
        document.getElementById('section-' + sectionName).remove()
    }
  })()
</script>

<script data-name="basic">
  tagified["basic"] && (function(){
    var sectionElm9 = document.querySelector('#section-basic-9');
    var input9 = sectionElm9.querySelector('input[name=tags-9]');

    var sectionElm8 = document.querySelector('#section-basic-8');
    var input8 = sectionElm8.querySelector('input[name=tags-8]');

    var sectionElm7 = document.querySelector('#section-basic-7');
    var input7 = sectionElm7.querySelector('input[name=tags-7]');

    var sectionElm6 = document.querySelector('#section-basic-6');
    var input6 = sectionElm6.querySelector('input[name=tags-6]');

    var sectionElm5 = document.querySelector('#section-basic-5');
    var input5= sectionElm5.querySelector('input[name=tags-5]');

    var sectionElm4 = document.querySelector('#section-basic-4');
    var input4 = sectionElm4.querySelector('input[name=tags-4]');

    var sectionElm3 = document.querySelector('#section-basic-3');
    var input3 = sectionElm3.querySelector('input[name=tags-3]');

    var sectionElm2 = document.querySelector('#section-basic-2');
    var input2 = sectionElm2.querySelector('input[name=tags-2]');

    var sectionElm1 = document.querySelector('#section-basic-1');
    var input1 = sectionElm1.querySelector('input[name=tags-1]');


    var whitelist = ['aaabc', 'aaacb', 'aaabb', 'bbbbc', 'cccbd', 'dddbe', 'eeec', 'fffcc'];

    // init Tagify script on the above inputs
    var tagify9 = new Tagify(input9, {
        // after 2 characters typed, all matching values from this list will be suggested in a dropdown
        // whitelist: [].concat(whitelist)
    })

    var tagify8 = new Tagify(input8, {
        // after 2 characters typed, all matching values from this list will be suggested in a dropdown
        // whitelist: [].concat(whitelist)
    })

    var tagify7 = new Tagify(input7, {
        // after 2 characters typed, all matching values from this list will be suggested in a dropdown
        // whitelist: [].concat(whitelist)
    })
    var tagify6 = new Tagify(input6, {
        // after 2 characters typed, all matching values from this list will be suggested in a dropdown
        // whitelist: [].concat(whitelist)
    })

    var tagify5 = new Tagify(input5, {
        // after 2 characters typed, all matching values from this list will be suggested in a dropdown
        // whitelist: [].concat(whitelist)
    })

    var tagify4 = new Tagify(input4, {
        // after 2 characters typed, all matching values from this list will be suggested in a dropdown
        // whitelist: [].concat(whitelist)
    })

    var tagify3 = new Tagify(input3, {
        // after 2 characters typed, all matching values from this list will be suggested in a dropdown
        // whitelist: [].concat(whitelist)
    })

    var tagify2 = new Tagify(input2, {
        // after 2 characters typed, all matching values from this list will be suggested in a dropdown
        // whitelist: [].concat(whitelist)
    })

    var tagify1 = new Tagify(input1, {
        // after 2 characters typed, all matching values from this list will be suggested in a dropdown
        // whitelist: [].concat(whitelist)
    })


  // Chainable event listeners
  tagify9.on('add', onAddTag)
        .on('remove', onRemoveTag)
        .on('input', onInput)
        .on('edit:input edit:updated edit:start edit:keydown', e => console.log(e.type, e))
        .on('invalid', onInvalidTag)
        .on('click', onTagClick)
        .on('focus', onTagifyFocusBlur)
        .on('blur', onTagifyFocusBlur)
        .on('dropdown:show', onDropdownShow)
        .on('dropdown:hide', onDropdownHide)
        .on('dropdown:select', onDropdownSelect)


    tagify8.on('add', onAddTag)
        .on('remove', onRemoveTag)
        .on('input', onInput)
        .on('edit:input edit:updated edit:start edit:keydown', e => console.log(e.type, e))
        .on('invalid', onInvalidTag)
        .on('click', onTagClick)
        .on('focus', onTagifyFocusBlur)
        .on('blur', onTagifyFocusBlur)
        .on('dropdown:show', onDropdownShow)
        .on('dropdown:hide', onDropdownHide)
        .on('dropdown:select', onDropdownSelect)

    tagify7.on('add', onAddTag)
        .on('remove', onRemoveTag)
        .on('input', onInput)
        .on('edit:input edit:updated edit:start edit:keydown', e => console.log(e.type, e))
        .on('invalid', onInvalidTag)
        .on('click', onTagClick)
        .on('focus', onTagifyFocusBlur)
        .on('blur', onTagifyFocusBlur)
        .on('dropdown:show', onDropdownShow)
        .on('dropdown:hide', onDropdownHide)
        .on('dropdown:select', onDropdownSelect)

    tagify6.on('add', onAddTag)
        .on('remove', onRemoveTag)
        .on('input', onInput)
        .on('edit:input edit:updated edit:start edit:keydown', e => console.log(e.type, e))
        .on('invalid', onInvalidTag)
        .on('click', onTagClick)
        .on('focus', onTagifyFocusBlur)
        .on('blur', onTagifyFocusBlur)
        .on('dropdown:show', onDropdownShow)
        .on('dropdown:hide', onDropdownHide)
        .on('dropdown:select', onDropdownSelect)

    tagify5.on('add', onAddTag)
        .on('remove', onRemoveTag)
        .on('input', onInput)
        .on('edit:input edit:updated edit:start edit:keydown', e => console.log(e.type, e))
        .on('invalid', onInvalidTag)
        .on('click', onTagClick)
        .on('focus', onTagifyFocusBlur)
        .on('blur', onTagifyFocusBlur)
        .on('dropdown:show', onDropdownShow)
        .on('dropdown:hide', onDropdownHide)
        .on('dropdown:select', onDropdownSelect)

    tagify4.on('add', onAddTag)
        .on('remove', onRemoveTag)
        .on('input', onInput)
        .on('edit:input edit:updated edit:start edit:keydown', e => console.log(e.type, e))
        .on('invalid', onInvalidTag)
        .on('click', onTagClick)
        .on('focus', onTagifyFocusBlur)
        .on('blur', onTagifyFocusBlur)
        .on('dropdown:show', onDropdownShow)
        .on('dropdown:hide', onDropdownHide)
        .on('dropdown:select', onDropdownSelect)

      tagify3.on('add', onAddTag)
        .on('remove', onRemoveTag)
        .on('input', onInput)
        .on('edit:input edit:updated edit:start edit:keydown', e => console.log(e.type, e))
        .on('invalid', onInvalidTag)
        .on('click', onTagClick)
        .on('focus', onTagifyFocusBlur)
        .on('blur', onTagifyFocusBlur)
        .on('dropdown:show', onDropdownShow)
        .on('dropdown:hide', onDropdownHide)
        .on('dropdown:select', onDropdownSelect)

        tagify1.on('add', onAddTag)
        .on('remove', onRemoveTag)
        .on('input', onInput)
        .on('edit:input edit:updated edit:start edit:keydown', e => console.log(e.type, e))
        .on('invalid', onInvalidTag)
        .on('click', onTagClick)
        .on('focus', onTagifyFocusBlur)
        .on('blur', onTagifyFocusBlur)
        .on('dropdown:show', onDropdownShow)
        .on('dropdown:hide', onDropdownHide)
        .on('dropdown:select', onDropdownSelect)


        tagify1.on('add', onAddTag)
        .on('remove', onRemoveTag)
        .on('input', onInput)
        .on('edit:input edit:updated edit:start edit:keydown', e => console.log(e.type, e))
        .on('invalid', onInvalidTag)
        .on('click', onTagClick)
        .on('focus', onTagifyFocusBlur)
        .on('blur', onTagifyFocusBlur)
        .on('dropdown:show', onDropdownShow)
        .on('dropdown:hide', onDropdownHide)
        .on('dropdown:select', onDropdownSelect)


  var mockAjax = (function mockAjax(){
      var timeout;
      return function(duration){
          clearTimeout(timeout); // abort last request
          return new Promise(function(resolve, reject){
              timeout = setTimeout(resolve, duration || 1000, whitelist)
          })
      }
  })()

  // tag added callback
  function onAddTag(e){
      console.log("onAddTag: ", e.detail);
      console.log("original input value: ", input.value)
      tagify.off('add', onAddTag) // exmaple of removing a custom Tagify event
  }

  // tag remvoed callback
  function onRemoveTag(e){
      console.log("Tag removed:", e.detail);
      console.log("tagify instance value:", tagify.value, tagify.getTagElms())
  }

  // on character(s) added/removed (user is typing/deleting)
  function onInput(e){
    console.log("onInput: ", e.detail);

    // get new whitelist from some async request (mocked)
    mockAjax()
        .then(function(result){
          tagify.settings.whitelist.length = result.length;
            /// https://stackoverflow.com/q/30640771/104380
            tagify.settings.whitelist.splice(0, result.length, ...result)
            // render the suggestions dropdown
            tagify.dropdown.show.call(tagify, e.detail.value);
        })
    }

    // invalid tag added callback
    function onInvalidTag(e){
      console.log( e.detail )
      debugger;
        console.log("onInvalidTag: ", e.detail);
    }

    // invalid tag added callback
    function onTagClick(e){
        console.log(e.detail);
        console.log("onTagClick: ", e.detail);
    }

    function onTagifyFocusBlur(e){
        console.log(e.type, "event fired")
    }

    function onDropdownShow(e){
        console.log("onDropdownShow: ", e.detail)
    }

    function onDropdownHide(e){
        console.log("onDropdownHide: ", e.detail)
    }

    function onDropdownSelect(e){
        console.log("onDropdownSelect: ", e.detail)
    }
})()
</script>


<script data-name="manual-suggestions">
  tagified["manual-suggestions"] && (function(){

  var input = document.querySelector('input[name=tags-manual-suggestions]'),
      // init Tagify script on the above inputs
      tagify = new Tagify(input, {
          whitelist : ["A# .NET", "A# (Axiom)", "A-0 System", "A+", "A++", "ABAP", "ABC", "ABC ALGOL", "ABSET", "ABSYS", "ACC", "Accent", "Ace DASL", "ACL2", "Avicsoft", "ACT-III", "Action!", "ActionScript", "Ada", "Adenine", "Agda", "Agilent VEE", "Agora", "AIMMS", "Alef", "ALF", "ALGOL 58", "ALGOL 60", "ALGOL 68", "ALGOL W", "Alice", "Alma-0", "AmbientTalk", "Amiga E", "AMOS", "AMPL", "Apex (Salesforce.com)", "APL", "AppleScript", "Arc", "ARexx", "Argus", "AspectJ", "Assembly language", "ATS", "Ateji PX", "AutoHotkey", "Autocoder", "AutoIt", "AutoLISP / Visual LISP", "Averest", "AWK", "Axum", "Active Server Pages", "ASP.NET", "B", "Babbage", "Bash", "BASIC", "bc", "BCPL", "BeanShell", "Batch (Windows/Dos)", "Bertrand", "BETA", "Bigwig", "Bistro", "BitC", "BLISS", "Blockly", "BlooP", "Blue", "Boo", "Boomerang", "Bourne shell (including bash and ksh)", "BREW", "BPEL", "B", "C--", "C++ – ISO/IEC 14882", "C# – ISO/IEC 23270", "C/AL", "Caché ObjectScript", "C Shell", "Caml", "Cayenne", "CDuce", "Cecil", "Cesil", "Céu", "Ceylon", "CFEngine", "CFML", "Cg", "Ch", "Chapel", "Charity", "Charm", "Chef", "CHILL", "CHIP-8", "chomski", "ChucK", "CICS", "Cilk", "Citrine (programming language)", "CL (IBM)", "Claire", "Clarion", "Clean", "Clipper", "CLIPS", "CLIST", "Clojure", "CLU", "CMS-2", "COBOL – ISO/IEC 1989", "CobolScript – COBOL Scripting language", "Cobra", "CODE", "CoffeeScript", "ColdFusion", "COMAL", "Combined Programming Language (CPL)", "COMIT", "Common Intermediate Language (CIL)", "Common Lisp (also known as CL)", "COMPASS", "Component Pascal", "Constraint Handling Rules (CHR)", "COMTRAN", "Converge", "Cool", "Coq", "Coral 66", "Corn", "CorVision", "COWSEL", "CPL", "CPL", "Cryptol", "csh", "Csound", "CSP", "CUDA", "Curl", "Curry", "Cybil", "Cyclone", "Cython", "Java", "Javascript", "M2001", "M4", "M#", "Machine code", "MAD (Michigan Algorithm Decoder)", "MAD/I", "Magik", "Magma", "make", "Maple", "MAPPER now part of BIS", "MARK-IV now VISION:BUILDER", "Mary", "MASM Microsoft Assembly x86", "MATH-MATIC", "Mathematica", "MATLAB", "Maxima (see also Macsyma)", "Max (Max Msp – Graphical Programming Environment)", "Maya (MEL)", "MDL", "Mercury", "Mesa", "Metafont", "Microcode", "MicroScript", "MIIS", "Milk (programming language)", "MIMIC", "Mirah", "Miranda", "MIVA Script", "ML", "Model 204", "Modelica", "Modula", "Modula-2", "Modula-3", "Mohol", "MOO", "Mortran", "Mouse", "MPD", "Mathcad", "MSIL – deprecated name for CIL", "MSL", "MUMPS", "Mystic Programming L"],
          dropdown: {
              position: "manual",
              maxItems: Infinity,
              enabled: 0,
              classname: "customSuggestionsList"
          },
          enforceWhitelist: true
      })

      tagify.on("dropdown:show", onSuggestionsListUpdate)
            .on("dropdown:hide", onSuggestionsListHide)

      renderSuggestionsList(tagify)

      // ES2015 argument destructuring
      function onSuggestionsListUpdate({ detail:suggestionsElm }){
          console.log(  suggestionsElm  )
      }

      function onSuggestionsListHide(){
          console.log("hide dropdown")
      }

      // https://developer.mozilla.org/en-US/docs/Web/API/Element/insertAdjacentElement
      function renderSuggestionsList(tagify){
          tagify.dropdown.show.call(tagify) // load the list
          tagify.DOM.scope.parentNode.appendChild(tagify.DOM.dropdown)
      }
  })()
</script>


<script data-name="textarea">
  tagified["textarea"] && (function(){
  var input = document.querySelector('textarea[name=tags2]'),
      tagify = new Tagify(input, {
          backspace        : "edit",
          enforceWhitelist : true,
          whitelist        : ["The Shawshank Redemption", "The Godfather", "The Godfather: Part II", "The Dark Knight", "12 Angry Men", "Schindler's List", "Pulp Fiction", "The Lord of the Rings: The Return of the King", "The Good, the Bad and the Ugly", "Fight Club", "The Lord of the Rings: The Fellowship of the Ring", "Star Wars: Episode V - The Empire Strikes Back", "Forrest Gump", "Inception", "The Lord of the Rings: The Two Towers", "One Flew Over the Cuckoo's Nest", "Goodfellas", "The Matrix", "Seven Samurai", "Star Wars: Episode IV - A New Hope", "City of God", "Se7en", "The Silence of the Lambs", "It's a Wonderful Life", "The Usual Suspects", "Life Is Beautiful", "Léon: The Professional", "Spirited Away", "Saving Private Ryan", "La La Land", "Once Upon a Time in the West", "American History X", "Interstellar", "Casablanca", "Psycho", "City Lights", "The Green Mile", "Raiders of the Lost Ark", "The Intouchables", "Modern Times", "Rear Window", "The Pianist", "The Departed", "Terminator 2: Judgment Day", "Back to the Future", "Whiplash", "Gladiator", "Memento", "Apocalypse Now", "The Prestige", "The Lion King", "Alien", "Dr. Strangelove or: How I Learned to Stop Worrying and Love the Bomb", "Sunset Boulevard", "The Great Dictator", "Cinema Paradiso", "The Lives of Others", "Paths of Glory", "Grave of the Fireflies", "Django Unchained", "The Shining", "WALL·E", "American Beauty", "The Dark Knight Rises", "Princess Mononoke", "Aliens", "Oldboy", "Once Upon a Time in America", "Citizen Kane", "Das Boot", "Witness for the Prosecution", "North by Northwest", "Vertigo", "Star Wars: Episode VI - Return of the Jedi", "Reservoir Dogs", "M", "Braveheart", "Amélie", "Requiem for a Dream", "A Clockwork Orange", "Taxi Driver", "Lawrence of Arabia", "Like Stars on Earth", "Double Indemnity", "To Kill a Mockingbird", "Eternal Sunshine of the Spotless Mind", "Toy Story 3", "Amadeus", "My Father and My Son", "Full Metal Jacket", "The Sting", "2001: A Space Odyssey", "Singin' in the Rain", "Bicycle Thieves", "Toy Story", "Dangal", "The Kid", "Inglourious Basterds", "Snatch", "Monty Python and the Holy Grail", "Hacksaw Ridge", "3 Idiots", "L.A. Confidential", "For a Few Dollars More", "Scarface", "Rashomon", "The Apartment", "The Hunt", "Good Will Hunting", "Indiana Jones and the Last Crusade", "A Separation", "Metropolis", "Yojimbo", "All About Eve", "Batman Begins", "Up", "Some Like It Hot", "The Treasure of the Sierra Madre", "Unforgiven", "Downfall", "Raging Bull", "The Third Man", "Die Hard", "Children of Heaven", "The Great Escape", "Heat", "Chinatown", "Inside Out", "Pan's Labyrinth", "Ikiru", "My Neighbor Totoro", "On the Waterfront", "Room", "Ran", "The Gold Rush", "The Secret in Their Eyes", "The Bridge on the River Kwai", "Blade Runner", "Mr. Smith Goes to Washington", "The Seventh Seal", "Howl's Moving Castle", "Lock, Stock and Two Smoking Barrels", "Judgment at Nuremberg", "Casino", "The Bandit", "Incendies", "A Beautiful Mind", "A Wednesday", "The General", "The Elephant Man", "Wild Strawberries", "Arrival", "V for Vendetta", "Warrior", "The Wolf of Wall Street", "Manchester by the Sea", "Sunrise", "The Passion of Joan of Arc", "Gran Torino", "Rang De Basanti", "Trainspotting", "Dial M for Murder", "The Big Lebowski", "The Deer Hunter", "Tokyo Story", "Gone with the Wind", "Fargo", "Finding Nemo", "The Sixth Sense", "The Thing", "Hera Pheri", "Cool Hand Luke", "Andaz Apna Apna", "Rebecca", "No Country for Old Men", "How to Train Your Dragon", "Munna Bhai M.B.B.S.", "Sholay", "Kill Bill: Vol. 1", "Into the Wild", "Mary and Max", "Gone Girl", "There Will Be Blood", "Come and See", "It Happened One Night", "Life of Brian", "Rush", "Hotel Rwanda", "Platoon", "Shutter Island", "Network", "The Wages of Fear", "Stand by Me", "Wild Tales", "In the Name of the Father", "Spotlight", "Star Wars: The Force Awakens", "The Nights of Cabiria", "The 400 Blows", "Butch Cassidy and the Sundance Kid", "Mad Max: Fury Road", "The Maltese Falcon", "12 Years a Slave", "Ben-Hur", "The Grand Budapest Hotel", "Persona", "Million Dollar Baby", "Amores Perros", "Jurassic Park", "The Princess Bride", "Hachi: A Dog's Tale", "Memories of Murder", "Stalker", "Nausicaä of the Valley of the Wind", "Drishyam", "The Truman Show", "The Grapes of Wrath", "Before Sunrise", "Touch of Evil", "Annie Hall", "The Message", "Rocky", "Gandhi", "Harry Potter and the Deathly Hallows: Part 2", "The Bourne Ultimatum", "Diabolique", "Donnie Darko", "Monsters, Inc.", "Prisoners", "8½", "The Terminator", "The Wizard of Oz", "Catch Me If You Can", "Groundhog Day", "Twelve Monkeys", "Zootopia", "La Haine", "Barry Lyndon", "Jaws", "The Best Years of Our Lives", "Infernal Affairs", "Udaan", "The Battle of Algiers", "Strangers on a Train", "Dog Day Afternoon", "Sin City", "Kind Hearts and Coronets", "Gangs of Wasseypur", "The Help"],
          callbacks        : {
              add    : console.log,  // callback when adding a tag
              remove : console.log   // callback when removing a tag
          }
      });
  })()
</script>


<script data-name='mix'>
  tagified["mix"] && (function(){
  var simpleMixInput = document.querySelector('[name="simple-mix"]')

  var settings = {
    mode: 'mix',
    pattern: '#',
    dropdown: {
      enabled: 1
    },
    whitelist:['alice','bob','foo','bar'],
    duplicates: true,
  }

  var simpleMixTagify = new Tagify(simpleMixInput, settings);
  setTimeout(function(){
    simpleMixTagify.addTags("alice")
  }, 1500)

  //////////////////////////////

  var input = document.querySelector('[name=mix]'),
      // init Tagify script on the above inputs
      tagify = new Tagify(input, {
          mode             : 'mix',  // <--  Enable mixed-content
          pattern          : /@|#/,  // <--  Tag words which start with @ or # (can be a String instead of Regex)
          enforceWhitelist : true,
          duplicates       : true,
          whitelist        : [       // <--  Set the initial whitelist, which will dynamically change as you type (see "input" event below)
            { value:'cartman', title:'Eric Cartman', class:'borderd-blue', prefix:'@' },
            { value:"cartman", id:500, title:"xxx", prefix:'@' },
            { value:'kyle', title:'Kyle Broflovski', prefix:'@' },
            { value:'Homer simpson', prefix:'#' }
          ],
          dropdown   : {
              enabled : 0,
              maxItems: 20
          },
          callbacks        : {
            add    : console.log,  // callback when adding a tag
            remove : console.log   // callback when removing a tag
          }
      })

  var whitelist_1 = [
      {
          value : 'kenny',
          title : 'Kenny McCormick'
      },
      {
          value : 'cartman',
          title : 'Eric Cartman'
      },
      {
          value : 'kyle',
          title : 'Kyle Broflovski'
      },
      {
          value : 'token',
          title : 'Token Black'
      },
      {
          value : 'jimmy',
          title : 'Jimmy Valmer'
      },
      {
          value : 'butters',
          title : 'Butters Stotch'
      },
      {
          value : 'stan',
          title : 'Stan Marsh'
      },
      {
          value : 'randy',
          title : 'Randy Marsh'
      },
      {
          value : 'Mr. Garrison',
          title : 'POTUS'
      },
      {
          value : 'Mr. Mackey',
          title : "M'Kay"
      }
  ]

  var whitelist_2 = ['Homer simpson', 'Marge simpson', 'Bart', 'Lisa', 'Maggie', 'Mr. Burns', 'Ned', 'Milhouse', 'Moe'];

  // A good place to pull server suggestion list accoring to the prefix/value
  tagify.on('input', function(e){
    var prefix = e.detail.prefix,
        newWhitelist;

    if( prefix ){
      if( prefix == '@' )
          newWhitelist = whitelist_1
      if( prefix == '#' )
          newWhitelist = whitelist_2

      if( newWhitelist ){
        tagify.settings.whitelist.splice(0, newWhitelist.length, ...newWhitelist)
      }

      if( e.detail.value.length > 1 )
          tagify.dropdown.show.call(tagify, e.detail.value);
    }

    console.log('mix-mode "input" event value: ', e.detail)
  })

  tagify.on('add', function(e){
      console.log(e)
  })

  })()
</script>


<script data-name="outside-of-the-box">
  tagified["outside-of-the-box"] && (function(){

  var input = document.querySelector('input[name=tags-outside]'),
      // init Tagify script on the above inputs
      tagify = new Tagify(input);

      // add a class to Tagify's input element
      tagify.DOM.input.classList.add('tagify__input--outside');

      // re-place Tagify's input element outside of the <tags> element (tagify.DOM.scope), just before it
      tagify.DOM.scope.parentNode.insertBefore(tagify.DOM.input, tagify.DOM.scope);

  })()
</script>


<script data-name="advance-options">
  tagified["advance-options"] && (function(){
  var input = document.querySelector('input[name=tags3]'),
      tagify = new Tagify(input, {
          pattern             : /^.{0,20}$/,  // Validate typed tag(s) by Regex. Here maximum chars length is defined as "20"
          delimiters          : ", ",         // add new tags when a comma or a space character is entered
          maxTags             : 6,
          blacklist           : ["fuck", "shit", "pussy"],
          keepInvalidTags     : true,         // do not remove invalid tags (but keep them marked as invalid)
          whitelist           : ["temple","stun","detective","sign","passion","routine","deck","discriminate","relaxation","fraud","attractive","soft","forecast","point","thank","stage","eliminate","effective","flood","passive","skilled","separation","contact","compromise","reality","district","nationalist","leg","porter","conviction","worker","vegetable","commerce","conception","particle","honor","stick","tail","pumpkin","core","mouse","egg","population","unique","behavior","onion","disaster","cute","pipe","sock","dialect","horse","swear","owner","cope","global","improvement","artist","shed","constant","bond","brink","shower","spot","inject","bowel","homosexual","trust","exclude","tough","sickness","prevalence","sister","resolution","cattle","cultural","innocent","burial","bundle","thaw","respectable","thirsty","exposure","team","creed","facade","calendar","filter","utter","dominate","predator","discover","theorist","hospitality","damage","woman","rub","crop","unpleasant","halt","inch","birthday","lack","throne","maximum","pause","digress","fossil","policy","instrument","trunk","frame","measure","hall","support","convenience","house","partnership","inspector","looting","ranch","asset","rally","explicit","leak","monarch","ethics","applied","aviation","dentist","great","ethnic","sodium","truth","constellation","lease","guide","break","conclusion","button","recording","horizon","council","paradox","bride","weigh","like","noble","transition","accumulation","arrow","stitch","academy","glimpse","case","researcher","constitutional","notion","bathroom","revolutionary","soldier","vehicle","betray","gear","pan","quarter","embarrassment","golf","shark","constitution","club","college","duty","eaux","know","collection","burst","fun","animal","expectation","persist","insure","tick","account","initiative","tourist","member","example","plant","river","ratio","view","coast","latest","invite","help","falsify","allocation","degree","feel","resort","means","excuse","injury","pupil","shaft","allow","ton","tube","dress","speaker","double","theater","opposed","holiday","screw","cutting","picture","laborer","conservation","kneel","miracle","brand","nomination","characteristic","referral","carbon","valley","hot","climb","wrestle","motorist","update","loot","mosquito","delivery","eagle","guideline","hurt","feedback","finish","traffic","competence","serve","archive","feeling","hope","seal","ear","oven","vote","ballot","study","negative","declaration","particular","pattern","suburb","intervention","brake","frequency","drink","affair","contemporary","prince","dry","mole","lazy","undermine","radio","legislation","circumstance","bear","left","pony","industry","mastermind","criticism","sheep","failure","chain","depressed","launch","script","green","weave","please","surprise","doctor","revive","banquet","belong","correction","door","image","integrity","intermediate","sense","formal","cane","gloom","toast","pension","exception","prey","random","nose","predict","needle","satisfaction","establish","fit","vigorous","urgency","X-ray","equinox","variety","proclaim","conceive","bulb","vegetarian","available","stake","publicity","strikebreaker","portrait","sink","frog","ruin","studio","match","electron","captain","channel","navy","set","recommend","appoint","liberal","missile","sample","result","poor","efflux","glance","timetable","advertise","personality","aunt","dog"],
          transformTag        : transformTag,
          dropdown : {
              enabled: 3,
          }
      })

  // generate a random color (in HSL format, which I like to use)
  var getRandomColor = (function(){
      function rand(min, max) {
          return min + Math.random() * (max - min);
      }

      return function(){
          var h = rand(1, 360)|0;
          var s = rand(40, 70)|0;
          var l = rand(65, 72)|0;
          return 'hsl(' + h + ',' + s + '%,' + l + '%)';
      }
  })();

  function transformTag( tagData ){
      tagData.style = "--tag-bg:" + getRandomColor();

      if( tagData.value.toLowerCase() == 'shit' )
        tagData.value = 's✲✲t'
  }

  tagify.on('add', function(e){
      console.log(e.detail)
  });

  tagify.on('invalid', function(e){
      console.log(e, e.detail);
  });

  })()
</script>


<script data-name="extra-properties">
  tagified["extra-properties"] && (function(){

  var tagify = new Tagify(document.querySelector('input[name=tags3-1]'), {
      delimiters : null,
      templates : {
          tag : function(v, tagData){
              console.log(tagData)
              try{
              // _ESCAPE_START_
                  return `<tag title='${v}' contenteditable='false' spellcheck="false" class='tagify__tag ${tagData.class ? tagData.class : ""}' ${this.getAttributes(tagData)}>
                              <x title='remove tag' class='tagify__tag__removeBtn'></x>
                              <div>
                                  ${tagData.code ?
                                  `<img onerror="this.style.visibility = 'hidden'" src='https://lipis.github.io/flag-icon-css/flags/4x3/${tagData.code.toLowerCase()}.svg'>` : ''
                                  }
                                  <span class='tagify__tag-text'>${v}</span>
                              </div>
                          </tag>`;
              // _ESCAPE_END_
              }
              catch(err){}
          },

          dropdownItem : function(tagData){
              try{
              // _ESCAPE_START_
                  return `<div class='tagify__dropdown__item ${tagData.class ? tagData.class : ""}'>
                              <img onerror="this.style.visibility = 'hidden'"
                                  src='https://lipis.github.io/flag-icon-css/flags/4x3/${tagData.code.toLowerCase()}.svg'>
                              <span>${tagData.value}</span>
                          </div>`
              // _ESCAPE_END_
              }
              catch(err){}
          }
      },
      enforceWhitelist : true,
      whitelist : [
        { value:'Afghanistan', code:'AF' },
        { value:'Åland Islands', code:'AX' },
        { value:'Albania', code:'AL' },
        { value:'Algeria', code:'DZ' },
        { value:'American Samoa', code:'AS' },
        { value:'Andorra', code:'AD' },
        { value:'Angola', code:'AO' },
        { value:'Anguilla', code:'AI' },
        { value:'Antarctica', code:'AQ' },
        { value:'Antigua and Barbuda', code:'AG' },
        { value:'Argentina', code:'AR' },
        { value:'Armenia', code:'AM' },
        { value:'Aruba', code:'AW' },
        { value:'Australia', code:'AU', searchBy:'beach, sub-tropical' },
        { value:'Austria', code:'AT' },
        { value:'Azerbaijan', code:'AZ' },
        { value:'Bahamas', code:'BS' },
        { value:'Bahrain', code:'BH' },
        { value:'Bangladesh', code:'BD' },
        { value:'Barbados', code:'BB' },
        { value:'Belarus', code:'BY' },
        { value:'Belgium', code:'BE' },
        { value:'Belize', code:'BZ' },
        { value:'Benin', code:'BJ' },
        { value:'Bermuda', code:'BM' },
        { value:'Bhutan', code:'BT' },
        { value:'Bolivia', code:'BO' },
        { value:'Bosnia and Herzegovina', code:'BA' },
        { value:'Botswana', code:'BW' },
        { value:'Bouvet Island', code:'BV' },
        { value:'Brazil', code:'BR' },
        { value:'British Indian Ocean Territory', code:'IO' },
        { value:'Brunei Darussalam', code:'BN' },
        { value:'Bulgaria', code:'BG' },
        { value:'Burkina Faso', code:'BF' },
        { value:'Burundi', code:'BI' },
        { value:'Cambodia', code:'KH' },
        { value:'Cameroon', code:'CM' },
        { value:'Canada', code:'CA' },
        { value:'Cape Verde', code:'CV' },
        { value:'Cayman Islands', code:'KY' },
        { value:'Central African Republic', code:'CF' },
        { value:'Chad', code:'TD' },
        { value:'Chile', code:'CL' },
        { value:'China', code:'CN' },
        { value:'Christmas Island', code:'CX' },
        { value:'Cocos (Keeling) Islands', code:'CC' },
        { value:'Colombia', code:'CO' },
        { value:'Comoros', code:'KM' },
        { value:'Congo', code:'CG' },
        { value:'Congo, The Democratic Republic of the', code:'CD' },
        { value:'Cook Islands', code:'CK' },
        { value:'Costa Rica', code:'CR' },
        { value:'Cote D\'Ivoire', code:'CI' },
        { value:'Croatia', code:'HR' },
        { value:'Cuba', code:'CU' },
        { value:'Cyprus', code:'CY' },
        { value:'Czech Republic', code:'CZ' },
        { value:'Denmark', code:'DK' },
        { value:'Djibouti', code:'DJ' },
        { value:'Dominica', code:'DM' },
        { value:'Dominican Republic', code:'DO' },
        { value:'Ecuador', code:'EC' },
        { value:'Egypt', code:'EG' },
        { value:'El Salvador', code:'SV' },
        { value:'Equatorial Guinea', code:'GQ' },
        { value:'Eritrea', code:'ER' },
        { value:'Estonia', code:'EE' },
        { value:'Ethiopia', code:'ET' },
        { value:'Falkland Islands (Malvinas)', code:'FK' },
        { value:'Faroe Islands', code:'FO' },
        { value:'Fiji', code:'FJ' },
        { value:'Finland', code:'FI' },
        { value:'France', code:'FR' },
        { value:'French Guiana', code:'GF' },
        { value:'French Polynesia', code:'PF' },
        { value:'French Southern Territories', code:'TF' },
        { value:'Gabon', code:'GA' },
        { value:'Gambia', code:'GM' },
        { value:'Georgia', code:'GE' },
        { value:'Germany', code:'DE' },
        { value:'Ghana', code:'GH' },
        { value:'Gibraltar', code:'GI' },
        { value:'Greece', code:'GR' },
        { value:'Greenland', code:'GL' },
        { value:'Grenada', code:'GD' },
        { value:'Guadeloupe', code:'GP' },
        { value:'Guam', code:'GU' },
        { value:'Guatemala', code:'GT' },
        { value:'Guernsey', code:'GG' },
        { value:'Guinea', code:'GN' },
        { value:'Guinea-Bissau', code:'GW' },
        { value:'Guyana', code:'GY' },
        { value:'Haiti', code:'HT' },
        { value:'Heard Island and Mcdonald Islands', code:'HM' },
        { value:'Holy See (Vatican City State)', code:'VA' },
        { value:'Honduras', code:'HN' },
        { value:'Hong Kong', code:'HK' },
        { value:'Hungary', code:'HU' },
        { value:'Iceland', code:'IS' },
        { value:'India', code:'IN' },
        { value:'Indonesia', code:'ID' },
        { value:'Iran, Islamic Republic Of', code:'IR' },
        { value:'Iraq', code:'IQ' },
        { value:'Ireland', code:'IE' },
        { value:'Isle of Man', code:'IM' },
        { value:'Israel', code:'IL', searchBy:'holy land, desert' },
        { value:'Italy', code:'IT' },
        { value:'Jamaica', code:'JM' },
        { value:'Japan', code:'JP' },
        { value:'Jersey', code:'JE' },
        { value:'Jordan', code:'JO' },
        { value:'Kazakhstan', code:'KZ' },
        { value:'Kenya', code:'KE' },
        { value:'Kiribati', code:'KI' },
        { value:'Korea, Democratic People\'S Republic of', code:'KP' },
        { value:'Korea, Republic of', code:'KR' },
        { value:'Kuwait', code:'KW' },
        { value:'Kyrgyzstan', code:'KG' },
        { value:'Lao People\'S Democratic Republic', code:'LA' },
        { value:'Latvia', code:'LV' },
        { value:'Lebanon', code:'LB' },
        { value:'Lesotho', code:'LS' },
        { value:'Liberia', code:'LR' },
        { value:'Libyan Arab Jamahiriya', code:'LY' },
        { value:'Liechtenstein', code:'LI' },
        { value:'Lithuania', code:'LT' },
        { value:'Luxembourg', code:'LU' },
        { value:'Macao', code:'MO' },
        { value:'Macedonia, The Former Yugoslav Republic of', code:'MK' },
        { value:'Madagascar', code:'MG' },
        { value:'Malawi', code:'MW' },
        { value:'Malaysia', code:'MY' },
        { value:'Maldives', code:'MV' },
        { value:'Mali', code:'ML' },
        { value:'Malta', code:'MT' },
        { value:'Marshall Islands', code:'MH' },
        { value:'Martinique', code:'MQ' },
        { value:'Mauritania', code:'MR' },
        { value:'Mauritius', code:'MU' },
        { value:'Mayotte', code:'YT' },
        { value:'Mexico', code:'MX' },
        { value:'Micronesia, Federated States of', code:'FM' },
        { value:'Moldova, Republic of', code:'MD' },
        { value:'Monaco', code:'MC' },
        { value:'Mongolia', code:'MN' },
        { value:'Montserrat', code:'MS' },
        { value:'Morocco', code:'MA' },
        { value:'Mozambique', code:'MZ' },
        { value:'Myanmar', code:'MM' },
        { value:'Namibia', code:'NA' },
        { value:'Nauru', code:'NR' },
        { value:'Nepal', code:'NP' },
        { value:'Netherlands', code:'NL' },
        { value:'Netherlands Antilles', code:'AN' },
        { value:'New Caledonia', code:'NC' },
        { value:'New Zealand', code:'NZ' },
        { value:'Nicaragua', code:'NI' },
        { value:'Niger', code:'NE' },
        { value:'Nigeria', code:'NG' },
        { value:'Niue', code:'NU' },
        { value:'Norfolk Island', code:'NF' },
        { value:'Northern Mariana Islands', code:'MP' },
        { value:'Norway', code:'NO' },
        { value:'Oman', code:'OM' },
        { value:'Pakistan', code:'PK' },
        { value:'Palau', code:'PW' },
        { value:'Palestinian Territory, Occupied', code:'PS' },
        { value:'Panama', code:'PA' },
        { value:'Papua New Guinea', code:'PG' },
        { value:'Paraguay', code:'PY' },
        { value:'Peru', code:'PE' },
        { value:'Philippines', code:'PH' },
        { value:'Pitcairn', code:'PN' },
        { value:'Poland', code:'PL' },
        { value:'Portugal', code:'PT' },
        { value:'Puerto Rico', code:'PR' },
        { value:'Qatar', code:'QA' },
        { value:'Reunion', code:'RE' },
        { value:'Romania', code:'RO' },
        { value:'Russian Federation', code:'RU' },
        { value:'RWANDA', code:'RW' },
        { value:'Saint Helena', code:'SH' },
        { value:'Saint Kitts and Nevis', code:'KN' },
        { value:'Saint Lucia', code:'LC' },
        { value:'Saint Pierre and Miquelon', code:'PM' },
        { value:'Saint Vincent and the Grenadines', code:'VC' },
        { value:'Samoa', code:'WS' },
        { value:'San Marino', code:'SM' },
        { value:'Sao Tome and Principe', code:'ST' },
        { value:'Saudi Arabia', code:'SA' },
        { value:'Senegal', code:'SN' },
        { value:'Serbia and Montenegro', code:'CS' },
        { value:'Seychelles', code:'SC' },
        { value:'Sierra Leone', code:'SL' },
        { value:'Singapore', code:'SG' },
        { value:'Slovakia', code:'SK' },
        { value:'Slovenia', code:'SI' },
        { value:'Solomon Islands', code:'SB' },
        { value:'Somalia', code:'SO' },
        { value:'South Africa', code:'ZA' },
        { value:'South Georgia and the South Sandwich Islands', code:'GS' },
        { value:'Spain', code:'ES' },
        { value:'Sri Lanka', code:'LK' },
        { value:'Sudan', code:'SD' },
        { value:'Suriname', code:'SR' },
        { value:'Svalbard and Jan Mayen', code:'SJ' },
        { value:'Swaziland', code:'SZ' },
        { value:'Sweden', code:'SE' },
        { value:'Switzerland', code:'CH' },
        { value:'Syrian Arab Republic', code:'SY' },
        { value:'Taiwan, Province of China', code:'TW' },
        { value:'Tajikistan', code:'TJ' },
        { value:'Tanzania, United Republic of', code:'TZ' },
        { value:'Thailand', code:'TH' },
        { value:'Timor-Leste', code:'TL' },
        { value:'Togo', code:'TG' },
        { value:'Tokelau', code:'TK' },
        { value:'Tonga', code:'TO' },
        { value:'Trinidad and Tobago', code:'TT' },
        { value:'Tunisia', code:'TN' },
        { value:'Turkey', code:'TR' },
        { value:'Turkmenistan', code:'TM' },
        { value:'Turks and Caicos Islands', code:'TC' },
        { value:'Tuvalu', code:'TV' },
        { value:'Uganda', code:'UG' },
        { value:'Ukraine', code:'UA' },
        { value:'United Arab Emirates', code:'AE' },
        { value:'United Kingdom', code:'GB' },
        { value:'United States', code:'US' },
        { value:'United States Minor Outlying Islands', code:'UM' },
        { value:'Uruguay', code:'UY' },
        { value:'Uzbekistan', code:'UZ' },
        { value:'Vanuatu', code:'VU' },
        { value:'Venezuela', code:'VE' },
        { value:'Viet Nam', code:'VN' },
        { value:'Virgin Islands, British', code:'VG' },
        { value:'Virgin Islands, U.S.', code:'VI' },
        { value:'Wallis and Futuna', code:'WF' },
        { value:'Western Sahara', code:'EH' },
        { value:'Yemen', code:'YE' },
        { value:'Zambia', code:'ZM' },
        { value:'Zimbabwe', code:'ZW' }
      ],
      dropdown : {
          enabled: 1, // suggest tags after a single character input
          classname : 'extra-properties' // custom class for the suggestions dropdown
      } // map tags' values to this property name, so this property will be the actual value and not the printed value on the screen
  })

  tagify.on('click', function(e){
      console.log(e.detail);
  });

  tagify.on('remove', function(e){
      console.log(e.detail);
  });

  tagify.on('add', function(e){
      console.log( "original Input:", tagify.DOM.originalInput);
      console.log( "original Input's value:", tagify.DOM.originalInput.value);
      console.log( "event detail:", e.detail);
  });

  // add the first 2 tags from the "allowedTags" Aray automatically
  tagify.addTags(tagify.settings.whitelist.slice(0,2));

  })()
</script>


<script data-name='readonly'>
  tagified["readonly"] && (function(){
  var input = document.querySelector('input[name=tags4]'),
      tagify = new Tagify(input);
  })()
</script>


<script data-name='readonly-mixed'>
  tagified["readonly-mixed"] && (function(){
  var input = document.querySelector('input[name=tags-readonly-mix]'),
      tagify = new Tagify(input);

  tagify.addTags([
      {
          value    : 'foo',
          readonly : true,
          title    : 'read-only tag'
      },
      {
          value    : 'bar',
          readonly : true,
          title    : 'read-only tag'
      }
  ])
  })()
</script>

<script data-name='mode-select'>
tagified["mode-select"] && (function(){
    var input = document.querySelector('input[name=tags-select-mode]'),
        tagify = new Tagify(input, {
            mode : "select",
            whitelist: ["first option", "second option", "third option"],
            blacklist: ['foo', 'bar'],
            keepInvalidTags: true,   // do not auto-remove invalid tags
            dropdown: {
                // closeOnSelect: false
            }
        })

    // bind events
    tagify.on('add', onAddTag)
    tagify.DOM.input.addEventListener('focus', onSelectFocus)

    function onAddTag(e){
        console.log(e.detail)
    }

    function onSelectFocus(e){
        console.log(e)
    }
})()
</script>

</script>  
@endsection
