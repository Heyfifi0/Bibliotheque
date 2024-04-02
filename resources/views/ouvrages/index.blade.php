@extends('layout.layout')
@section('content')
    <h1 style="text-align:center;">Liste des ouvrages</h1>
    <table style="margin-left: auto; margin-right: auto;background-color:#D3D3D3;">
        <tr style="text-align:left;">
            <th >Titres</th>
            <th>Editeurs</th>
            <th>Auteurs</th>
            <th>Types</th>
            <th>Genres</th>

            <th><a href="{{ route('ouvrages.create')}}" class="btn  ">  Créer </a></th>
        </tr>
        @foreach($livres as $livre)
        <tr>
            <td style="padding-right:50px;"> {{ $livre->titre}}</td>
            <td style="padding-right:50px;"> {{ $livre->editeurs->libelle }}</td>
            <td style="padding-right:50px;"> 
                @foreach($livre->auteurs as $auteur)
                    {{ $auteur->nom }} {{ $auteur->prenom }}
                    @if(!$loop->last)
                        ,
                    @endif
                @endforeach
            </td>
            <td> {{ $livre->type}}  </td> 
            <td style="padding-right:50px;"> 
                @foreach($livre->genres as $genre)
                    {{ $genre->libelle }} 
                    @if(!$loop->last)
                        ,
                    @endif
                @endforeach
            </td> 
            <td> 
                <a href="{{ route('ouvrages.edit', $livre->id_ouvrage) }}" class="btn btn-primary">
                        <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Navigation/Plus.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <title>Stockholm-icons / Navigation / Plus</title>
                        <desc>Created with Sketch.</desc>
                        <defs/>
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/>
                            <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/>
                        </g>
                    </svg><!--end::Svg Icon--></span>
                </a>
            </td>
        <td>
            <form action="{{ route('ouvrages.destroy', $livre->id_ouvrage) }}" method="post">
                    @csrf
                    @method('DELETE')
                <button type="submit" class="btn " onclick="return confirm('Voulez vous vraiment supprimer cet ouvrage?')">
                    <span class="svg-icon icone-success svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Home/Trash.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <title>Stockholm-icons / Home / Trash</title>
                    <desc>Created with Sketch.</desc>
                    <defs/>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"/>
                        <path d="M6,8 L18,8 L17.106535,19.6150447 C17.04642,20.3965405 16.3947578,21 15.6109533,21 L8.38904671,21 C7.60524225,21 6.95358004,20.3965405 6.89346498,19.6150447 L6,8 Z M8,10 L8.45438229,14.0894406 L15.5517885,14.0339036 L16,10 L8,10 Z" fill="#000000" fill-rule="nonzero"/>
                        <path d="M14,4.5 L14,3.5 C14,3.22385763 13.7761424,3 13.5,3 L10.5,3 C10.2238576,3 10,3.22385763 10,3.5 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
                    </g>
                </svg><!--end::Svg Icon--></span>
                </button>
            </form>
        </td> 
    </tr>
    @endforeach
    
</table>
{{$livres->links()}}
@endsection