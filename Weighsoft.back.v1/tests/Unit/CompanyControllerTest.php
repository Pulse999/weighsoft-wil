public function test_company_requires_name()
{
    $response = $this->postJson(
        '/api/company',
        [
            'code' => 'COMP01'
        ]
    );

    $response->assertStatus(422);
}