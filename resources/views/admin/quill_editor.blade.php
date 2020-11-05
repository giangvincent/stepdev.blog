<div class="form-group {!! !$errors->has($label) ?: 'has-error' !!}">

  <label for="{{$id}}" class="col-sm-2 control-label">{{$label}}</label>

  <div class="col-sm-6">

    @include('admin::form.error')
    <div id="{{$id}}"></div>
    <textarea class="form-control" id="{{$id}}-content" name="{{$name}}"
      placeholder="{{ trans('admin::lang.input') }} {{$label}}" {!! $attributes
      !!}>{{ old($column, $value) }}</textarea>
  </div>
</div>
<script>
  var toolbarOptions = [
            ["bold", "italic", "underline", "strike"], // toggled buttons
            ["blockquote", 'code-block'],
            ["link", "video", 'image'],
            [{ header: 1 }, { header: 2 }], // custom button values
            [{ list: "ordered" }, { list: "bullet" }],
            [{ script: "sub" }, { script: "super" }], // superscript/subscript
            [{ indent: "-1" }, { indent: "+1" }], // outdent/indent
            [{ direction: "rtl" }], // text direction

            [{ size: ["small", false, "large", "huge"] }], // custom dropdown
            [{ header: [1, 2, 3, 4, 5, 6, false] }],

            [{ color: [] }, { background: [] }], // dropdown with defaults from theme
            [{ font: [] }],
            [{ align: [] }],

            ["clean"] // remove formatting button
          ];
          

          var editor = new Quill(document.getElementById("{{ $id }}"), {
            modules: {
              toolbar: toolbarOptions
            },
            theme: "snow",
            height: 200
          });

          var contentDelta = document.getElementById("{{$id}}-content").value
          const importContent = editor.clipboard.convert(contentDelta);
          
      editor.setContents(importContent);
      editor.on("text-change", function(delta, oldDelta, source) {

        document.getElementById("{{$id}}-content").value = editor.root.innerHTML
      });
</script>