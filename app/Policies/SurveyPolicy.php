<?php

namespace App\Policies;

use App\Models\User;
use MattDaneshvar\Survey\Models\Survey;
use Illuminate\Auth\Access\HandlesAuthorization;

class SurveyPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_survey');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \MattDaneshvar\Survey\Models\Survey  $survey
     * @return bool
     */
    public function view(User $user, Survey $survey): bool
    {
        return $user->can('view_survey');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function create(User $user): bool
    {
        return $user->can('create_survey');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \MattDaneshvar\Survey\Models\Survey  $survey
     * @return bool
     */
    public function update(User $user, Survey $survey): bool
    {
        return $user->can('update_survey');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \MattDaneshvar\Survey\Models\Survey  $survey
     * @return bool
     */
    public function delete(User $user, Survey $survey): bool
    {
        return $user->can('delete_survey');
    }

    /**
     * Determine whether the user can bulk delete.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_survey');
    }

    /**
     * Determine whether the user can permanently delete.
     *
     * @param  \App\Models\User  $user
     * @param  \MattDaneshvar\Survey\Models\Survey  $survey
     * @return bool
     */
    public function forceDelete(User $user, Survey $survey): bool
    {
        return $user->can('force_delete_survey');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_survey');
    }

    /**
     * Determine whether the user can restore.
     *
     * @param  \App\Models\User  $user
     * @param  \MattDaneshvar\Survey\Models\Survey  $survey
     * @return bool
     */
    public function restore(User $user, Survey $survey): bool
    {
        return $user->can('restore_survey');
    }

    /**
     * Determine whether the user can bulk restore.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_survey');
    }

    /**
     * Determine whether the user can replicate.
     *
     * @param  \App\Models\User  $user
     * @param  \MattDaneshvar\Survey\Models\Survey  $survey
     * @return bool
     */
    public function replicate(User $user, Survey $survey): bool
    {
        return $user->can('replicate_survey');
    }

    /**
     * Determine whether the user can reorder.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_survey');
    }

}
