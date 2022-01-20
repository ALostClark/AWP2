<strong>Title:</strong> {{ $title }}
<br /><strong>Link:</strong> {{ $link  }}
<br /><strong>Date:</strong> {{ $date  }}
<br /><strong>Description:</strong> <br /><span style="white-space: pre-line">{{ $description }}</span>
<br />
<img src="{{ asset('storage/' . $filename) }}"  alt="{{ $title }}"/>
