@extends('admin.master')

@section('pageTitle')

    Settings

@endsection

@section('container-main')
<div class="box">

<div class="title">

    <h4> 
        <span>SoloApp Settings</span>
    </h4>
    
</div>
<div class="content">

<form class="form-horizontal" action="#">
    
    <div class="form-row row-fluid">
        <div class="span12">
            <div class="row-fluid">
                <label class="form-label span4" for="normal">Google Analytics</label>
                <input class="span8" id="normalInput" type="text" />
            </div>
        </div>
    </div>

    <div class="form-row row-fluid">
        <div class="span12">
            <div class="row-fluid">
                <label class="form-label span4" for="focusedInput">Focused input</label>
                <input class="span8 focused" id="focusedInput" type="text" value="This is focused…" />
            </div>
        </div>
    </div>

    <div class="form-row row-fluid">
        <div class="span12">
            <div class="row-fluid">
                <label class="form-label span4" for="password">Password input</label>
                <input class="span8" id="passwordInput" type="password" />
            </div>
        </div> 
    </div>

    <div class="form-row row-fluid">
        <div class="span12">
            <div class="row-fluid">
                <label class="form-label span4" for="tooltip">With tooltip</label>
                <input class="span8 tip" id="tooltipInput" type="text" title="This is some tooltip" />
            </div>
        </div> 
    </div>

    <div class="form-row row-fluid"> 
        <div class="span12">
            <div class="row-fluid">
                <label class="form-label span4" for="placeholder">With placeholder</label>
                <input class="span8" id="placeholderInput" type="text" placeholder="This is placeholder text" />
            </div>
        </div> 
    </div>

    <div class="form-row row-fluid"> 
        <div class="span12">
            <div class="row-fluid">
                <label class="form-label span4">Read only input</label>
                <input class="span8" type="text" readonly="readonly" value="Some value here" />
            </div>
        </div> 
    </div>

    <div class="form-row row-fluid">
        <div class="span12">
            <div class="row-fluid">
                <label class="form-label span4" for="disabledInput">Disabled input</label>
                <input class="span8 disabled" id="disabledInput" type="text" placeholder="Disabled input here…" disabled="disabled" />
            </div>
        </div>
    </div>

    <div class="form-row row-fluid">
        <div class="span12">
            <div class="row-fluid">
                <label class="form-label span4" for="maxlenght">Max lenght</label>
                <input class="span8" id="maxlengthInput" type="text" placeholder="Max lenght 20 characters" maxlength="20"/>
            </div>
        </div>
    </div>

    <div class="form-row row-fluid">
        <div class="span12">
            <div class="row-fluid">
                <label class="form-label span4" for="normal">
                    Label hint
                    <span class="help-block">Some work has to be done</span>
                </label>
                <input class="span8" id="normalInput1" type="text" />
            </div>
        </div> 
    </div>

    <div class="form-row row-fluid">
        <div class="span12">
            <div class="row-fluid">
                <label class="form-label span4" for="prependedInput">Prepended text</label>
                <div class="input-prepend">
                    <span class="add-on">@</span><input class="span8" id="prependedInput" size="16" type="text" />
                </div>
                <span class="help-block blue span8">Here's some hint text</span>
            </div>
        </div>
    </div>

    <div class="form-row row-fluid">
        <div class="span12">
            <div class="row-fluid">
                <label class="form-label span4" for="appendedInput">Appended text</label>
                <div class="input-append">
                    <input class="span8" id="appendedInput" size="16" type="text" /><span class="add-on">.00</span>
                </div>
                <span class="help-inline blue">Here's more help text</span>
            </div>
        </div>
    </div>

    <div class="form-row row-fluid">
        <div class="span12">
            <div class="row-fluid">
                <label class="form-label span4" for="appendedInputButton">Append with button</label>
                <div class="input-append">
                    <input class="span8" id="appendedInputButton" size="16" type="text" /><button class="btn" type="button">Go!</button>
                </div>
            </div>
        </div>
    </div>

    <div class="form-row row-fluid">
        <div class="span12">
            <div class="row-fluid">
                <label class="form-label span4" for="tags">Tags</label>
                <div class="span8 controls">
                    <input id="tags" type="text" value="awesome,nice" style="width:100%;" />
                </div>
            </div>
        </div>  
    </div>  

    <div class="form-row row-fluid">
        <div class="span12">
            <div class="row-fluid">
                <label class="form-label span4" for="normal">Grid fields</label>
                <div class="grid-inputs span8">
                    <input class="span3" type="text" placeholder=".span2" />
                    <input class="span5" type="text" placeholder=".span4" />
                    <input class="span8" type="text" placeholder=".span6" />
                </div>
            </div>
        </div>
    </div>

    <div class="form-row row-fluid">
        <div class="span12">
            <div class="row-fluid">
                <label class="form-label span4" for="textarea">File input</label>
                <input type="file" name="fileinput" id="file" />
            </div>
        </div>  
    </div>
    
    <div class="form-actions">
       <button type="submit" class="btn btn-info">Save changes</button>
       <button type="button" class="btn">Cancel</button>
    </div>
        

</form>

    </div>

</div><!-- End .box -->



@endsection