<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perusahaan - Pelamar</title>
    <link rel="stylesheet" href="/companycss/company-pelamar.css">
    <link rel="stylesheet" href="/css-bootstrap/bootstrap.css">
    <script src="/js-bootstrap/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
 <!--ISI KONTEN-->
    
    @include('layout.company.sidebarprofilecompany')
  

  <!--SIDEBAR-->
    
  <!--RIGHT VIEW-->
    <div class="right-view">
      <!--NAVBAR-->
      @include('layout.company.navbarcompany')
        <!--END NAVBAR-->

        <!--LIST PELAMAR-->
        <div class="pelamar-company">
            <h5>Pelamar</h5>
            <div class="pelamar">

                {{-- start pelamar --}}
                @foreach ($lowongans as $lowongan )
                    <div class="job-1">
                        <div class="nama-job">
                            <h6> {{ $lowongan->title_lowongan }}</h6>
                        </div>
                        @foreach ( $detailLowongansByLowongan[$lowongan->id] as $detail)
                        <div class="candidate"> <a href="{{ url('/company/profile/detail/'.encrypt($detail->id)) }}">
                            <div class="info-candidate">
                                <div class="profil-candidate">
                                    <img src="{{ asset('storage/userCandidate/' . $detail->userCandidate->id . '/fotoProfileCandidate/' . $detail->userCandidate->fotoProfilCandidate) }}" alt="foto profil">
                                </div>
                                <div class="info">
                                    <h6>{{ $detail->userCandidate->users->nama_lengkap }}</h6>
                                    <p>{{ $detail->userCandidate->universitas }}</p>
                                </div>
                            </div>
                            <div class="tanggal-melamar"> {{  $detail->created_at }}
                            </div></a>
                            <div class="status-candidate">
                                @if($detail->status == 'proses')
                                <form action="/company/profile/lowongan/changestatus/proses" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="id" value="{{ Crypt::encrypt($detail->id) }}">
                                    <div class="status-candidate">
                                        <button name="status" value="diterima" {{ $detail->status == 'diterima' ? 'selected' : '' }} class="btn btn-primary" id="acc-status" type="submit">Terima</button>
                                        <button name="status" value="ditolak" {{ $detail->status == 'ditolak' ? 'selected' : '' }} class="btn btn-primary" id="rej-status" type="submit">Tolak</button>
                                    </div>    
                                </form>     
                                @elseif($detail->status == 'diterima')
                                    <div class="status-candidate">
                                        <div class="terima">Terima</div>
                                    </div>
                                @elseif($detail->status == 'ditolak')
                                    <div class="status-candidate">
                                        <div class="tolak">Tolak</div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        @endforeach
                        

                    </div>
                @endforeach
            
              {{-- end pelamar --}}


              
                
              
            </div>
        </div>
        <!--END LIST PELAMAR--> 
        
   </div>
   <!--END RIGHT VIEW-->
   
  </div>
  <!--END ISI-KONTEN-->

  @include('layout.footer')
  <!-- End Footer -->
    {{-- <script>
        $(document).on('click', '.change-status', function() {
            var id = $(this).data('id');
            var status = $(this).data('status');
            $.ajax({
                url: "{{ route('company.pelamar.changestatus') }}",
                method: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    id: id,
                    status: status
                },
                success: function(response) {
                    if(response.success) {
                        alert('Status berhasil diubah');
                        location.reload();
                    } else {
                        alert('Gagal mengubah status');
                    }
                }
            });
        });
    </script> --}}
  <script>
    function loadCoverImage(event) {
        const coverImage = document.getElementById('cover-image');
        coverImage.src = URL.createObjectURL(event.target.files[0]);
        coverImage.onload = function() {
            URL.revokeObjectURL(coverImage.src); // release memory
        }
    }

    function loadProfileImage(event) {
        const profileImage = document.getElementById('profile-image');
        profileImage.src = URL.createObjectURL(event.target.files[0]);
        profileImage.onload = function() {
            URL.revokeObjectURL(profileImage.src); // release memory
        }
    }
</script>
</body>
</html>