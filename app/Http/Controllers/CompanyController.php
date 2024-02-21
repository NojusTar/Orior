<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return view("company.index", [
            "companies" => Company::latest()->filter(request(["search"]))->simplePaginate(5)
        ]);
    }

    public function show(Company $company)
    {
        return view("company.show", ["company" => $company]);
    }

    public function create()
    {
        return view("company.create");
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            "name" => "required",
            "companyCode" => ["required", "numeric"],
            "pvm" => "required",
            "director" => "required",
            "location" => "required",
            "phone" => "required",
            "logo" => "nullable",
            "email" => ["required", "email"],
            "website" => "sometimes",
            "socials" => "sometimes",
            "workers" => ["required", "numeric"],
            "capital" => "required",
            "age" => "required",
            "tags" => "sometimes",
            "description" => ["sometimes", "required"]
        ]);

        if($request->hasFile("logo"))
        {
            $formFields["logo"] = $request->file("logo")->store("logos", "public");
        }

        Company::create($formFields);

        return redirect("/")->with("message", "Company added successfully!");
    }

    public function destroy(Company $company)
    {
        $company->delete();

        return redirect("/");
    }

    public function edit(Company $company)
    {
        return view("company.edit", ["company" => $company]);
    }

    public function update(Company $company, Request $request)
    {

        $formFields = $request->validate([
            "logo" => "nullable",
            "name" => "required",
            "companyService" => "required",
            "companyCode" => "required",
            "pvm" => "required",
            "director" => "required",
            "age" => "required",
            "location" => "required",
            "postalCode" => "required",
            "state" => "required",
            "activities" => "required",
            "services" => "required",
            "incomeLatest" => "required",
            "profit" => "required",
            "deptsSodra" => "required",
            "financialState" => "required",
            "workers" => "required",
            "jobAds" => "required",
            "avgSalary" => "required",
            "salary" => "required",
            "description" => "required",
            "imgDescription" => "required",
            "images" => "nullable",
            "about" => "required",
            "website" => "required",
            "contactWeb" => "required",
            "email" => "required",
        ]);

        $company->update($formFields);

        return back();
    }
}
