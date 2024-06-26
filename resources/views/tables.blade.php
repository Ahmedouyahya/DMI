@extends('layouts.user_type.auth')

@section('content')

<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card-header pb-0 d-flex justify-content-between">
            <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#studentModal">Generat PDF</button>
        </div>
        <div class="card mb-4">

          <div class="card-header pb-0 d-flex justify-content-between">
            <h6>Table des Étudiants</h6>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#studentModal">Ajouter Étudiant</button>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nom de l'Étudiant</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Numéro</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Année de Bac</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Année de Diplôme</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Moyenne Générale</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($students as $student)
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="{{ $student->profile_photo_url }}" class="avatar avatar-sm me-3" alt="student">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{ $student->name }}</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">{{ $student->number }}</p>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">{{ $student->year_of_bac }}</p>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">{{ $student->year_of_diploma }}</p>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">{{ $student->general_avg }}</p>
                    </td>
                    <td class="align-middle">
                      <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-bs-toggle="modal" data-bs-target="#studentModal" data-student="{{ json_encode($student) }}">
                        Editer
                      </a>
                      <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-link text-secondary font-weight-bold text-xs">Supprimer</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</main>

<!-- Modal -->
<div class="modal fade" id="studentModal" tabindex="-1" aria-labelledby="studentModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="studentModalLabel">Ajouter / Éditer Étudiant</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="studentForm" action="{{ route('students.store') }}" method="POST">
        @csrf
        <div class="modal-body">
          <input type="hidden" name="_method" value="POST">
          <div class="mb-3">
            <label for="profile" class="form-label">Profil</label>
            <input type="text" class="form-control" id="profile" name="profile" required>
          </div>
          <div class="mb-3">
            <label for="name" class="form-label">Nom de l'Étudiant</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="mb-3">
            <label for="number" class="form-label">Numéro</label>
            <input type="text" class="form-control" id="number" name="number" required>
          </div>
          <div class="mb-3">
            <label for="year_of_bac" class="form-label">Année de Bac</label>
            <input type="text" class="form-control" id="year_of_bac" name="year_of_bac" required>
          </div>
          <div class="mb-3">
            <label for="year_of_diploma" class="form-label">Année de Diplôme</label>
            <input type="text" class="form-control" id="year_of_diploma" name="year_of_diploma" required>
          </div>
          <div class="mb-3">
            <label for="score_s1" class="form-label">Score S1</label>
            <input type="text" class="form-control" id="score_s1" name="score_s1" required>
          </div>
          <div class="mb-3">
            <label for="score_s2" class="form-label">Score S2</label>
            <input type="text" class="form-control" id="score_s2" name="score_s2" required>
          </div>
          <div class="mb-3">
            <label for="score_s3" class="form-label">Score S3</label>
            <input type="text" class="form-control" id="score_s3" name="score_s3" required>
          </div>
          <div class="mb-3">
            <label for="score_s4" class="form-label">Score S4</label>
            <input type="text" class="form-control" id="score_s4" name="score_s4" required>
          </div>
          <div class="mb-3">
            <label for="score_s5" class="form-label">Score S5</label>
            <input type="text" class="form-control" id="score_s5" name="score_s5" required>
          </div>
          <div class="mb-3">
            <label for="score_s6" class="form-label">Score S6</label>
            <input type="text" class="form-control" id="score_s6" name="score_s6" required>
          </div>
          <div class="mb-3">
            <label for="avg_moy6" class="form-label">Moyenne Moy6</label>
            <input type="text" class="form-control" id="avg_moy6" name="avg_moy6" readonly>
          </div>
          <div class="mb-3">
            <label for="bonus_ann_form" class="form-label">Bonus Annuel de Formation</label>
            <input type="text" class="form-control" id="bonus_ann_form" name="bonus_ann_form" readonly>
          </div>
          <div class="mb-3">
            <label for="bonus_1st_session" class="form-label">Bonus 1ère Session</label>
            <input type="text" class="form-control" id="bonus_1st_session" name="bonus_1st_session" required>
          </div>
          <div class="mb-3">
            <label for="malus" class="form-label">Malus</label>
            <input type="text" class="form-control" id="malus" name="malus" required>
          </div>
          <div class="mb-3">
            <label for="general_avg" class="form-label">Moyenne Générale</label>
            <input type="text" class="form-control" id="general_avg" name="general_avg" readonly>
          </div>
          <div class="mb-3">
            <label for="speciality" class="form-label">Spécialité</label>
            <input type="text" class="form-control" id="speciality" name="speciality" required>
          </div>
          <div class="mb-3">
            <label for="diploma_institution" class="form-label">Institution du Diplôme</label>
            <input type="text" class="form-control" id="diploma_institution" name="diploma_institution" required>
          </div>
          <div class="mb-3">
            <label for="choice1" class="form-label">Choix 1</label>
            <input type="text" class="form-control" id="choice1" name="choice1" required>
          </div>
          <div class="mb-3">
            <label for="choice2" class="form-label">Choix 2</label>
            <input type="text" class="form-control" id="choice2" name="choice2" required>
          </div>
          <div class="mb-3">
            <label for="choice3" class="form-label">Choix 3</label>
            <input type="text" class="form-control" id="choice3" name="choice3" required>
          </div>
          <div class="mb-3">
            <label for="choice4" class="form-label">Choix 4</label>
            <input type="text" class="form-control" id="choice4" name="choice4" required>
          </div>
          <!-- Ajouter d'autres champs au besoin -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
          <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
      var studentModal = document.getElementById('studentModal');
      var studentForm = document.getElementById('studentForm');
      var modalTitle = studentModal.querySelector('.modal-title');
      studentModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var student = button.getAttribute('data-student');
        if (student) {
          student = JSON.parse(student);
          studentForm.action = '/students/' + student.id;
          studentForm.querySelector('[name="_method"]').value = 'PUT';
          modalTitle.textContent = 'Éditer Étudiant';
          studentForm.querySelector('#profile').value = student.profile;
          studentForm.querySelector('#name').value = student.name;
          studentForm.querySelector('#number').value = student.number;
          studentForm.querySelector('#year_of_bac').value = student.year_of_bac;
          studentForm.querySelector('#year_of_diploma').value = student.year_of_diploma;
          studentForm.querySelector('#score_s1').value = student.score_s1;
          studentForm.querySelector('#score_s2').value = student.score_s2;
          studentForm.querySelector('#score_s3').value = student.score_s3;
          studentForm.querySelector('#score_s4').value = student.score_s4;
          studentForm.querySelector('#score_s5').value = student.score_s5;
          studentForm.querySelector('#score_s6').value = student.score_s6;
          studentForm.querySelector('#avg_moy6').value = student.avg_moy6;
          studentForm.querySelector('#bonus_ann_form').value = student.bonus_ann_form;
          studentForm.querySelector('#bonus_1st_session').value = student.bonus_1st_session;
          studentForm.querySelector('#malus').value = student.malus;
          studentForm.querySelector('#general_avg').value = student.general_avg;
          studentForm.querySelector('#speciality').value = student.speciality;
          studentForm.querySelector('#diploma_institution').value = student.diploma_institution;
          studentForm.querySelector('#choice1').value = student.choice1;
          studentForm.querySelector('#choice2').value = student.choice2;
          studentForm.querySelector('#choice3').value = student.choice3;
          studentForm.querySelector('#choice4').value = student.choice4;
          // Ajouter d'autres champs au besoin
        } else {
          studentForm.action = '{{ route('students.store') }}';
          studentForm.querySelector('[name="_method"]').value = 'POST';
          modalTitle.textContent = 'Ajouter Étudiant';
          studentForm.reset();
        }
      });
      // Calcul du Bonus Annuel de Formation
      function calculateBonus() {
        var year_of_bac = new Date(studentForm.querySelector('#year_of_bac').value).getFullYear();
        var year_of_diploma = new Date(studentForm.querySelector('#year_of_diploma').value).getFullYear();

        if (year_of_diploma - year_of_bac === 3) {
          studentForm.querySelector('#bonus_ann_form').value = '1';
        } else {
          studentForm.querySelector('#bonus_ann_form').value = '0';
        }
      }

      // Appeler la fonction de calcul lors du changement des champs d'année
      studentForm.querySelector('#year_of_bac').addEventListener('change', calculateBonus);
      studentForm.querySelector('#year_of_diploma').addEventListener('change', calculateBonus);

    });
  </script>

@endsection
