<?php

namespace App\Repositories;

use App\Models\Company;

class CompanyRepository
{
    public function all()
    {
        return Company::all();
    }

    public function find($id)
    {
        return Company::find($id);
    }

    public function create(array $data)
    {
        return Company::create($data);
    }

    public function update($id, array $data)
    {
        $company = Company::find($id);

        if ($company) {
            $company->update($data);
        }

        return $company;
    }

    public function delete($id)
    {
        $company = Company::find($id);

        if ($company) {
            $company->delete();
        }

        return $company;
    }
}
