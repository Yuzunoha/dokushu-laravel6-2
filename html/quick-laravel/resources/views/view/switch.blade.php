{{ $num }}

@switch($num)
    @case(1)
    わるい
    @break

    @case(2)
    ややわるい
    @break

    @case(3)
    ふつう
    @break

    @case(4)
    ややよい
    @break

    @case(5)
    よい
    @break

    @default
    不明
@endswitch
