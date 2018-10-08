<div class="card mb-3">
                    <h3 class="card-header">Categories</h3>
                        @if (count($allcategories) > 0)
                            <ul class="list-group list-group-flush">
                                @foreach($allcategories as $category)
                                    <li class="list-group-item"><a href="{{ route('category',$category->id) }}">{{ $category->name}} </a></li>
                                @endforeach

                            </ul>
                        @endif
                </div>