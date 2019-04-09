@extends('theme::layout')

@section('content')
<div class="container-fluid">
    <div>
        <button class="btn btn-primary" data-bind="click: addNewWidget">Add new widget</button>
    </div>
    <br>
    <div data-bind="component: {name: 'dashboard-grid', params: $data}"></div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="/libs/gridstack/gridstack.css"/>
<style type="text/css">
    .grid-stack {
        /* background: lightgoldenrodyellow; */
    }

    .grid-stack-item-content {
        color: #2c3e50;
        text-align: center;
        background-color: #18bc9c;
    }
</style>
@endpush

@push('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.0/jquery-ui.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/shim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.2.0/knockout-min.js"></script>
<script src="/libs/gridstack/gridstack.js"></script>
<script src="/libs/gridstack/gridstack.jQueryUI.js"></script>

<script type="text/javascript">
    ko.components.register('dashboard-grid', {
        viewModel: {
            createViewModel: function (controller, componentInfo) {
                var ViewModel = function (controller, componentInfo) {
                    var grid = null;

                    this.widgets = controller.widgets;

                    this.afterAddWidget = function (items) {
                        if (grid == null) {
                            grid = $(componentInfo.element).find('.grid-stack').gridstack({
                                auto: false
                            }).data('gridstack');
                        }

                        var item = items.find(function (i) { return i.nodeType == 1 });
                        grid.addWidget(item);
                        ko.utils.domNodeDisposal.addDisposeCallback(item, function () {
                            grid.removeWidget(item);
                        });
                    };
                };

                return new ViewModel(controller, componentInfo);
            }
        },
        template:
            [
                '<div class="grid-stack" data-bind="foreach: {data: widgets, afterRender: afterAddWidget}">',
                '   <div class="grid-stack-item" data-bind="attr: {\'data-gs-x\': $data.x, \'data-gs-y\': $data.y, \'data-gs-width\': $data.width, \'data-gs-height\': $data.height, \'data-gs-auto-position\': $data.auto_position}">',
                '       <div class="grid-stack-item-content"><button class="btn btn-danger" data-bind="click: $root.deleteWidget">Delete me</button></div>',
                '   </div>',
                '</div> '
            ].join('')
    });

    $(function () {
        var Controller = function (widgets) {
            var self = this;

            this.widgets = ko.observableArray(widgets);

            this.addNewWidget = function () {
                this.widgets.push({
                    x: 0,
                    y: 0,
                    width: Math.floor(1 + 3 * Math.random()),
                    height: Math.floor(1 + 3 * Math.random()),
                    auto_position: true
                });
                return false;
            };

            this.deleteWidget = function (item) {
                self.widgets.remove(item);
                return false;
            };
        };

        var widgets = [
            {x: 0, y: 0, width: 2, height: 2},
            {x: 2, y: 0, width: 4, height: 2},
            {x: 6, y: 0, width: 2, height: 4},
            {x: 1, y: 2, width: 4, height: 2}
        ];

        var controller = new Controller(widgets);
        ko.applyBindings(controller);
    });
</script>
@endpush
