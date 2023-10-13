<x-app-layout>

    <x-slot name="header">
        <div class="conditional-include1">
            @include('layouts.navigations.navigation_admin')
        </div>
        <div class="conditional-include2">
            @include('layouts.navigations.responsive_nav')
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            @foreach ($posts as $post)
            <div class="post_edit_area p-4 sm:p-8 shadow sm:rounded-lg" style="opacity: 0.8;margin-top:1rem;">
                <div>
                    @include('PostEdit.NonGithubUser.update-posts-information-form')
                </div>
            </div>
            @endforeach
            <div class="pagination">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
