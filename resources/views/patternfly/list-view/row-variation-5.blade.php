@extends('layouts.app')

@section('content')
    <div class="list-group list-view-pf list-view-pf-equalized-column">
        <div class="list-group-item">
            <div class="list-view-pf-main-info">
                <div class="list-view-pf-left">
                    <span class="pficon pficon-ok list-view-pf-icon-md list-view-pf-icon-success"></span>
                </div>
                <div class="list-view-pf-body">
                    <div class="list-view-pf-description">
                        <div class="list-group-item-heading">
                            Event One
                        </div>
                        <div class="list-group-item-text">
                            The following snippet of text is <a href="#">rendered as link text</a>.
                        </div>
                    </div>
                    <div class="list-view-pf-additional-info">
                        <div class="list-view-pf-additional-info-item">
                            <span class="pficon pficon-screen"></span>
                            <strong>108</strong> Hosts
                        </div>
                        <div class="list-view-pf-additional-info-item">
                            <span class="pficon pficon-cluster"></span>
                            <strong>28</strong> Clusters
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="list-group-item">
            <div class="list-view-pf-main-info">
                <div class="list-view-pf-left">
                    <span class="pficon pficon-info list-view-pf-icon-md list-view-pf-icon-info"></span>
                </div>
                <div class="list-view-pf-body">
                    <div class="list-view-pf-description">
                        <div class="list-group-item-heading">
                            Event One
                        </div>
                        <div class="list-group-item-text">
                            The following snippet of text is <a href="#">rendered as link text</a>.
                        </div>
                    </div>
                    <div class="list-view-pf-additional-info">
                        <div class="list-view-pf-additional-info-item">
                            <span class="pficon pficon-screen"></span>
                            <strong>8</strong> Hosts
                        </div>
                        <div class="list-view-pf-additional-info-item">
                            <span class="pficon pficon-cluster"></span>
                            <strong>28</strong> Clusters
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="list-group-item">
            <div class="list-view-pf-main-info">
                <div class="list-view-pf-left">
                    <span class="pficon pficon-warning-triangle-o list-view-pf-icon-md list-view-pf-icon-warning"></span>
                </div>
                <div class="list-view-pf-body">
                    <div class="list-view-pf-description">
                        <div class="list-group-item-heading">
                            Event One
                        </div>
                        <div class="list-group-item-text">
                            The following snippet of text is <a href="#">rendered as link text</a>.
                        </div>
                    </div>
                    <div class="list-view-pf-additional-info">
                        <div class="list-view-pf-additional-info-item">
                            <span class="pficon pficon-screen"></span>
                            <strong>108</strong> Hosts
                        </div>
                        <div class="list-view-pf-additional-info-item">
                            <span class="pficon pficon-cluster"></span>
                            <strong>28</strong> Clusters
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="list-group-item">
            <div class="list-view-pf-main-info">
                <div class="list-view-pf-left">
                    <span class="pficon pficon-error-circle-o list-view-pf-icon-md list-view-pf-icon-danger"></span>
                </div>
                <div class="list-view-pf-body">
                    <div class="list-view-pf-description">
                        <div class="list-group-item-heading">
                            Event One
                        </div>
                        <div class="list-group-item-text">
                            The following snippet of text is <a href="#">rendered as link text</a>.
                        </div>
                    </div>
                    <div class="list-view-pf-additional-info">
                        <div class="list-view-pf-additional-info-item">
                            <span class="pficon pficon-screen"></span>
                            <strong>8</strong> Hosts
                        </div>
                        <div class="list-view-pf-additional-info-item">
                            <span class="pficon pficon-cluster"></span>
                            <strong>28</strong> Clusters
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // Equalize column width
        $(document).ready(function () {
            var widest = 0;
            $('.list-view-pf-equalized-column .list-view-pf-additional-info-item').each( function() {
                widest = $(this).width() > widest ? $(this).width() : widest;
            }).width(widest);
        });
    </script>
@endsection