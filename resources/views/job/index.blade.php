<div>
    <h3>my name is {{ $name }}</h3>
    @foreach ($jobs as $job )
    <div>{{ $job['title'] }}:{{ $job['Salary'] }}</div>
    @endforeach
    
</div>
